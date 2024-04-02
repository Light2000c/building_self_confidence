<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspirationController extends Controller
{
    public function index(){
        return view("inspiration");
    }
}
