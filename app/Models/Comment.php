<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function annonce(){
        $this->belongsTo('App\Models\Annonce');
    }

    public function user(){
        $this->belongsTo('App\User');
    }
}
