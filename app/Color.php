<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Shoe;

class Color extends Model
{
    protected $fillable = ['id', 'name'];

    public function Shoe(){
        return $this->belongsTo('\App\Shoe');
    }
}
