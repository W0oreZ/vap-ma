<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnonceImage extends Model
{
    protected $fillable = [
        'name','annonce_id','isMain'
    ];

    public function annonce(){
        $this->belongsTo('App\Models\Annonce');
    }
}
