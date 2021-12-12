<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;

        if ($usertype=='1') {
            return view('admin.home');
        }
        else{
            $data= Product::paginate(6);

            $user= Auth()->user();
            $count= Cart::where('phone', $user->phone)->count();

            return view('user.home', compact('data', 'count'));
        }
    }



    public function index(){

        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $data= Product::paginate(6);
            return view('user.home', compact('data'));
        }
        
    }



    public function ourproducts(){
        $data= Product::paginate(6);
        $user= Auth()->user();
        $cart= Cart::where('phone', $user->phone)->get();
        $count= Cart::where('phone', $user->phone)->count();
        return view('user.ourproducts', compact('data', 'count', 'cart'));
    }

    public function aboutus(){
       $user= Auth()->user();
       $cart= Cart::where('phone', $user->phone)->get();
       $count= Cart::where('phone', $user->phone)->count();
       return view('user.about',  compact('count', 'cart'));
   }

   public function contactus(){
       $user= Auth()->user();
       $cart= Cart::where('phone', $user->phone)->get();
       $count= Cart::where('phone', $user->phone)->count();
       return view('user.contact' , compact('count', 'cart'));
   }

    //---------- Search Product ------------

   public function search(Request $request){
    $search= $request->search;

    if($search==''){
        $data= Product::paginate(6);
        return view('user.home', compact('data'));
    }
    
    $data= Product::where('title','Like','%'.$search.'%')->get();

    return view('user.home', compact('data'));
}

    //---------- Add Cart Product ------------
public function addcart(Request $request, $id){

    if(Auth::id()){
        $user= Auth()->user();
        $product= Product::find($id);

        $cart= new Cart;
        $cart->name= $user->name;
        $cart->phone= $user->phone;
        $cart->address= $user->address;
        $cart->product_title= $product->title;
        $cart->price= $product->price;
        $cart->quantity= $request->quantity;

        $cart->save();

        return redirect()->route('cart.show')->with('success', 'Product Add to Cart Successfully');
    }
    else{
        return redirect('login');
    }

}



    //--------- show Cart-------------
public function cartshow(){

    $user= Auth()->user();
    $cart= Cart::where('phone', $user->phone)->get();
    $count= Cart::where('phone', $user->phone)->count();

    return view('user.carts.show', compact('count','cart'));
}


    //--------- Delete Cart-------------
public function cartdelete($id){
    $cart= Cart::find($id);
    $cart->delete();
    return redirect()->back()->with('success', 'Cart Deleted Successfully');
}


    //--------- Confirm Order-------------
public function confirmorder(Request $request){

    $user= Auth()->user();
    $name= $user->name;
    $phone= $user->phone;
    $address= $user->address;

    foreach($request->productname as $key=>$productname){

        $order= new Order;
        $order->product_name= $request->productname[$key];
        $order->price= $request->price[$key];
        $order->quantity= $request->quantity[$key];

        $order->name= $name;
        $order->phone= $phone;
        $order->address= $address;

        $order->status= 'not delivered';

        $order->save();

    }
    DB::table('carts')->where('phone', $phone)->delete();

    return redirect()->back()->with('success', 'Product Ordered Successfully');


}






public function viewdetails($id){
    $data= Product::find($id);



    
    return view('user.product.details', compact('data'));
}






}
