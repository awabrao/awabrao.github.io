<?php

namespace App\Http\Controllers;

use App\Models\accessories;
use App\Models\orders;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function productCart(){
        return view('cart');
    }
    public function addProducttoCart($id){
        $product=Products::findOrFail($id);
        $cart=session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id]=[
                "id"=>$product->id,
                "name"=>$product->ProductName,
                "quantity"=>1,
                "price"=>$product->ProductPrice,
                "ram"=>$product->Ram,
                "Hard"=>$product->Hard,
                "harddisktype"=>$product->HardDiskType,
                "brand"=>$product->ProductBrand,
                "image"=>$product->ProductImage
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product has been added to cart!');
    }
    
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart=session()->get('cart');
            $cart[$request->id]["quantity"]= $request->quantity;
            session()->put('cart',$cart);
            session()->flash('success','Product added to cart.');
        }
    }
    public function deleteProduct(Request $request)
    {
        if($request->id){
            $cart=session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success','Product Succefully deleted');
            
        }
    }
    public function productlisting()
    {
        $products=Products::all();
        
        return view('productlistings',['products'=>$products,]);
    }
    
}
