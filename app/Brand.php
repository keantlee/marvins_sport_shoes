<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Shoe;

class Brand extends Model
{
    protected $fillable = ['id', 'name'];

    // Brand has many Shoe
    public function Shoe(){
        return $this->hasMany('\App\Shoe');
    }
}
