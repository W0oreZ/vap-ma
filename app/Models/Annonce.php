<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'title','description','prix','categorie_id','ville_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function admin(){
        return $this->belongsTo('App\User');
    }

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }

    public function ville(){
        return $this->belongsTo('App\Models\Ville');
    }

    public function images(){
        return $this->hasMany('App\Models\AnnonceImage');
    }

    public function primaryImage(){
        foreach ($this->images as $img) {
            if($img->isMain == 1)
                return asset('images/tmp').'/'.$img->name;
        }
        return false;
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function path(){
        return '/annonce/'.$this->id;
    }
}
