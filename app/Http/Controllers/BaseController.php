<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLevel;
use App\Http\Requests;

class BaseController extends Controller
{
    public function index()
    {

    }

    public function rules()
    {
        return view('rule');
    }

    public function leader()
    {

    	return view('leader',compact('users',));
    }

    public function contact()
    {
    	return view('contact');
    }
}
