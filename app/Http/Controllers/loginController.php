<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(Request $request)
    {
       $res=DB::select('select * from  student');
       print_r($res);
    }
}
