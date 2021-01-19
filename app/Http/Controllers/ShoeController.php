<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Shoe;
use App\Brand;
use App\Color;
use App\Size;
use DB;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoes = Shoe::all();
        
        return view('pages.admin.product_inventory', compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // input rules for validation
        $rules = [
            'name' => 'required',
            'item_description' => 'required',
            'brand_id' => 'required|numeric',
            'size_id' => 'required|numeric',
            'color_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
        ];

        // input messages for validation
        $messages = [
            'required' => '*The :attribute field is required!',
        ];

        // $this->validate($request ,$rules, $messages);
        $validation = Validator::make($request->all(), $rules, $messages);

        if($validation->fails()){
            $error_message = $validation->getMessageBag()->toArray();
            return response()->json($error_message, 400);
            // $Response = $validation->messages();
        }
        else{
            //create new product
            $shoe = new Shoe;
            $shoe->name = $request->name;
            $shoe->item_description = $request->item_description;
            $shoe->brand_id = $request->brand_id;
            $shoe->size_id = $request->size_id;
            $shoe->color_id = $request->color_id;
            $shoe->quantity = $request->quantity;
            $shoe->price = $request->price;

            // image file handling
            $image = $request->file("image");
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/shoes/Inventory/";
            $image->move($destination, $image_name);
            $shoe->img = $destination.$image_name;
            $shoe->save();
            
            $success_response = ['success' => true, 'message' => 'The product have been successfully save!'];
            return response()->json($success_response, 200);
        }
        // return response()->json(['success' => 'The product have been successfully save!'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $shoes = Shoe::findOrFail($id);
        $shoes = DB::table('shoes')->where('id', $id)->get();

        return view('pages.admin.product_view_details', compact('shoes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the ID of the selected product in Database
        $shoe = Shoe::findOrFail($id);

        // Rules
        $rules = [
            'name' => 'required',
            'item_description' => 'required',
            'brand_id' => 'required|numeric',
            'size_id' => 'required|numeric',
            'color_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
        ];

        // Messages
        $messages = [
            'required' => '*The :attribute field is required!',
        ];

        // Validation
        $validation = Validator::make($request->all(), $rules, $messages);

        if ($validation->fails()) {
            $error_message = $validation->getMessageBag()->toArray();
            return response()->json($error_message, 400);
        } else {
            // Update building
            $shoe = new Shoe;
            $shoe->name = $request->name;
            $shoe->item_description = $request->item_description;
            $shoe->brand_id = $request->brand_id;
            $shoe->size_id = $request->size_id;
            $shoe->color_id = $request->color_id;
            $shoe->quantity = $request->quantity;
            $shoe->price = $request->price;

            // image file handling
            $image = $request->file("image");
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/shoes/Inventory/";
            $image->move($destination, $image_name);
            $shoe->img = $destination.$image_name;
            $shoe->save();

            $success_response = ['success' => true, 'message' => 'The product have been successfully update!'];
            return response()->json($success_response, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the ID of the selected product in Database
        $shoe = Shoe::findOrFail($id);

        $shoe->delete();

        $success->response = ['success'=>true, 'message' => 'The product have been remove successfully!'];

        return response()->json($success_response, 200);
    }
}
