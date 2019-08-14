<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\std;

class stdscontroller extends Controller
{
    $std=std::all();
    return $std;
}
