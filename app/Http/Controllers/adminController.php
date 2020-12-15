<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin_dashboard(){
        return view('pages.admin.index');
    }

    public function admin_inventory(){
        return view('pages.admin.product_inventory');
    }

    public function user_checkout_form(){
        return view('pages.client_order.checkout_form');
    }
}
