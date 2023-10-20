<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as viewview;

class AddProducts extends Controller
{
    public function add(Request $request){
        $products=new products;
        $products->ProductName=$request->productname;
        $products->ProductBrand=$request->brandname;
        $products->Ram=$request->pram;
        $products->Hard=$request->phard;
        $products->HardDiskType=$request->phtype;
        $products->ProductPrice=$request->productprice;
        $products->ProductDescription=$request->pdescription;
        $filename=time().$request->file('productimage')->getClientOriginalName();
        $path=$request->file('productimage')->storeAs('images',$filename,'public');
        $products->ProductImage='/storage/'.$path;
        $filename2=time().$request->file('productimage2')->getClientOriginalName();
        $path=$request->file('productimage2')->storeAs('images',$filename2,'public');
        $products->ProductImage2='/storage/'.$path;
        $filename3=time().$request->file('productimage3')->getClientOriginalName();
        $path=$request->file('productimage3')->storeAs('images',$filename3,'public');
        $products->ProductImage3='/storage/'.$path;
        $products->type=$request->type;
        
        $products->save();
        return redirect()->back()->with('msg','added');
    }
    public function show(Request $request): viewview
    {
        // $search=$request['search'] ?? "";
        // if($search!=""){
        //     $products=products::where('ProductName', 'LIKE', '%$search%x')->orwhere('ProductBrand','LIKE','%$search%')->get();
        // }else{}
            $search=$request['search'];
            if($search!=""){
                $search=$request->search;
                $products = DB::table('products')->where('ProductName','LIKE', "%$search%") ->orWhere('ProductBrand', $search)->get();
                return view('welcome',['products'=>$products,'search'=>$search]);
            }
            else{
                $products=products::all();               
                return view('welcome',['products' => DB::table('products')->paginate(20)]);
            }
        
        
        
        
    }
 
    public function laptop(){
        $laptops=DB::table('Products')->where('type','laptop')->get();
        // ->where('type','laptop')
        return view('laptop',['laptops'=>$laptops]);
            }
            public function pc(){
                $pcs=DB::table('Products')->where('type','PC')->get();
                // ->where('type','laptop')
                return view('pc',['pcs'=>$pcs]);
                    }
    public function accessories(){
        $accessories=DB::table('Products')->where('type','Accessories')->get();
        
         return view('accessories',['accessories'=>$accessories]);
         }
         public function update(Request $request){
            $affected = DB::table('Products')
              ->where('id', $request->id)
              ->update(['ProductName' => $request->name,'ProductBrand' => $request->brand,'Ram' => $request->ram,'Hard' => $request->hard,'HardDiskType' => $request->harddisktype,'ProductPrice' => $request->price]);
              return redirect()->back()->with('success','Record Updated');

         }
         public function delete(Request $request){
            $deleted = DB::table('Products')->where('id','=', $request->id)->delete();
            return redirect('/')->with('success','Record Deleted');

         }
         public function productdetails($id){
            $product=DB::table('Products')
            ->select('*')->where('id',$id)->get();
            return view('productdetails',['products'=>$product]);
         }
            
}
