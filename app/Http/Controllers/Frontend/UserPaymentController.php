<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    public function userpayment(){
        return view('frontend.pages.payment.userpayment');
    }
}