<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    public function test(Request $request)
    {
    	print_r($request->request());
    }
}
