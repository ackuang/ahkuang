<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sharing;

class SharingController extends Controller
{
    public function index()
    {
    	$sharings = Sharing::orderBy('id', 'desc')->take(20)->get();

		return view('sharing.index', compact('sharings'));
	}
}