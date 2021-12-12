<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Order;
use App\Models\Message;

class AdminController extends Controller
{
        public function product(){

         if(Auth::id()){
            if (Auth::user()->usertype=='1') {
               return view('admin.products.create');
            }else{
               return redirect()->back();
            }

         }else{
            return redirect('login');
         }
        }



        public function store(Request $request){

         $validatedData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'quantity' => 'required|string',
            'file' => 'required|image',
        ]);


         $data= new Product;

         $data->title= $request->title;
         $data->price= $request->price;
         $data->description= $request->description;
         $data->quantity= $request->quantity;


         $image= $request->file;
         $image_name= time(). '.' .$image->getClientOriginalExtension();
         $request->file->move('productimage',$image_name);

         $data->image=$image_name;



         $data->save();
         return redirect()->route('admin.products.show')->with('success', 'New Product Created Successfully');
     }


     public function showproduct(){
        $data= Product::all();
        return view('admin.products.show', compact('data'));
    }


    public function edit($id){
        $data=Product::find($id);
        return view('admin.products.edit', compact('data'));

    }


    public function update(Request $request, $id){

     $validatedData = $request->validate([
        'title' => 'required|string',
        'price' => 'required|string',
        'description' => 'required|string',
        'quantity' => 'required|string',
    ]);


     $data= Product::find($id);

     $data->title= $request->title;
     $data->price= $request->price;
     $data->description= $request->description;
     $data->quantity= $request->quantity;

     $image= $request->file;

     if($image){

        $image_name= time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('productimage',$image_name);

        $data->image=$image_name;
    }



    $data->save();
    return redirect()->route('admin.products.show')->with('success', 'Product Data Updated Successfully');
    }


    public function delete($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->route('admin.products.show')->with('success', 'Product Deleted Successfully');

    }


    //---------Order show-----------
    public function ordershow(){

      $order= Order::all();
      return view('admin.orders.show', compact('order'));
    }


    //---------Order Status Update-----------
    public function statusupdate($id){

      $order= Order::find($id);
      $order->status='delivered';

      $order->save();
      return redirect()->back()->with('success', 'Order Status Updated Successfully');
    }


     //---------Message Show-----------
    public function showmessage(){
      $msg= Message::all();
      return view('admin.messages.show', compact('msg'));
    }

     public function deletemessage($id){
    $msg= Message::find($id);
    $msg->delete();
    return redirect()->back()->with('success', 'Message Deleted Successfully');

   }












}
