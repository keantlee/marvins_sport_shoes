<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Shoe;

class Size extends Model
{
    protected $fillable = ['id', 'size_number'];

    // Size belongs to Shoe
    public function Shoe()
    {
        return $this->belongsTo('\App\Shoe');
    }
}
