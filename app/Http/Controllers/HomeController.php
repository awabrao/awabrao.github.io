<?php

namespace App\Http\Controllers;

use App\Models\CustomOrders;
use App\Models\orders;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){        
        $products=Products::all();
        $orders=orders::all();
        $user=User::all();
        $customorders=CustomOrders::all();
        
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                // $userid=Auth::id();
                $orders=DB::table('orders')->where('userid',Auth::id())->get();
                return view('dashboard',['orders'=>$orders]);
               }

                elseif($usertype=='admin')
                {
                    return view('admin.adminhome',['products'=>$products,'orders'=>$orders,'user'=>$user,'customorders'=>$customorders]);

                }
                else{
                    return redirect()->back();
                }
            


        }


    }
}
