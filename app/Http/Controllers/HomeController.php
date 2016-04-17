<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function adcheck()
    {
        return view('adminlogin');
    }

    public function admin()
    {
        $pass = Input::get('password');
        if($pass == 'Helloworld')
            return redirect('/home');
        else
        {
            $error = 'Incorrect Password';
            return redirect('/admin')->with('error','Incorrect Password');
        }
    }
}
