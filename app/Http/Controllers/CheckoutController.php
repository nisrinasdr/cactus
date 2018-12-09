<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
        public function step1()
    {
        if(Auth::check()){
            return redirect()->route('checkout.shipping');
        }
        return redirect('login');
    }

        public function shipping()
    {
        return view('shipping-info');
    }

        public function payment()
    {
        return view('payment');
    }
    

}
