<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function path(){
        return '/profile/'.$this->id;
    }

    public function edit_path(){
        return '/profile/'.$this->id.'/edit';
    }
    
}
