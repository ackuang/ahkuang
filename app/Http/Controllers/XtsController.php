<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class XtsController extends Controller
{
    public function index() 
    {
		return view('xts.index');
	}
}