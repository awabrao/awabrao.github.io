<?php

namespace App\Http\Controllers;

use App\Models\CustomOrders;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\orders;
use Illuminate\Support\Facades\Auth;

class checkout extends Controller
{
    public function checkout(Request $request){
        
        
        $order=new orders;       
        $order->productid=$request->productid;
        $order->userid=Auth::id();
        $order->address=$request->address;
        $order->number=$request->number;
        $order->name=$request->productname;
        $order->model=$request->productmodel;
        $order->price=$request->productprice;
        $order->save();
    
        
       
        $request->session()->forget('cart');
        return redirect('/')->with('success','Order Completed');
    }
    public function totalorders(){
        $orders=orders::all();
        return view('orderlisting',['orders'=>$orders]);
        
    }
    public function customOrders(Request $request){
        $orders=new CustomOrders;
        $orders->processor=$request->processor;
        $orders->generation=$request->generation;
        $orders->ram=$request->ram;
        $orders->hard=$request->hard;
        $orders->harddisktype=$request->harddisktype;
        $orders->graphicscard=$request->graphicscard;
        $orders->case=$request->case;
        $orders->extras=$request->extras;
        $orders->user=Auth::id();
        $orders->save();
        return redirect()->back()->with('success','Order Placed!! You Will Be Notified!!');
    }
    public function customorderlistings(){
        $orders=CustomOrders::all();
        return view('admin/customorder',['orders'=>$orders]);        
    }
    public function userlisting(){
        $users=User::all();
        return view('admin/userlisting',['users'=>$users]);
}
}
