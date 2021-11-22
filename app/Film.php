<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function director(){
        return $this->belongsTo(Director::class);
    }
}
