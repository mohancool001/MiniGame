<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('home');
    }

    public function contact()
    {
    	return view('contact');
    }
}
