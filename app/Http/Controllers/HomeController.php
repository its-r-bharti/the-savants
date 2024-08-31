<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function feature(){
        return redirect('/home/feature');
    }
}
