<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shoe;
use App\Brand;
use App\Color;
use App\Size;

class ShoeController extends Controller
{
    public function add_shoe_form(){
        return view('pages.admin.crud.add_shoe');
    }

    public function show_preview_page_form(){

    }

    public function save_shoe_form(){
        //input validation

    }

    public function jordan_Items()
    {
        return view("pages.product-items.product_page");
    }

    // public function kobe_Items(Request $request, $id)
    // {
    //     $kobe_shoes = Shoe::where('shoe_products.brand_id', $request->id)->orderBy('shoe_products', 'desc')->first();
    //     return view("pages.kobe", compact("kobe_shoes"));
    // }

    // public function nike_Items(Request $request, $id)
    // {
    //     $nike_shoes = Shoe::findorfail($id);
    //     return view("pages.nike", compact("nike_shoes"));
    // }
}
