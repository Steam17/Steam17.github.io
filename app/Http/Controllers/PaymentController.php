<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($business)
    {
        $data = Business::find($business);

        return view('payment', [ 'data' => $data ]);
    }
}
