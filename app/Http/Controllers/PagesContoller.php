<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContoller extends Controller
{
    //
    public function create()
    {
    	return view ('create.blade.php');
    }
}
