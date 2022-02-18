<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function customer()
    {
        return view('customer', ['show' => 0, 'customers' => ['11', '22', '33']]);
    }

    public function index()
    {
        return view('customer.form');
    }

    public function cus_save(Request $req)
    {
        print_r($req);
    }

}
