<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Brand;
use \App\Color;
use \App\Size;

class Shoe extends Model
{
    protected $fillable = ['id', 'name', 'item_description', 'img', 'price', 'brand_id', 'color_id', 'size_id'];

    // Shoe belongs to Brand
    public function Brand(){
        return $this->belongsTo('\App\Brand');
    }

    // Shoe has many Color
    public function Color(){
        return $this->hasMany('\App\Color');
    }

    // Shoe has many Sizes
    public function Size(){
        return $this->hasMany('\App\Size');
    }
}
