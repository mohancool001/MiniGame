<?php

namespace App\Http\Controllers;

use Input;
use Auth;
use App\User;
use App\UserLevel;
use App\Blacklist;
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
        if($pass == 'mohanadmin')
        {

        }
        else
        {
            $error = 'Incorrect Password';
            return view('adminlogin',compact('error'));
        }
    }

    public function stgame()
    {
        $error='n';
        $user=Auth::user();
        $userlev = $this->findorcreate($user);
        $level = $userlev->level;
        $userifb = Blacklist::where('user_id',$userlev->user_id)->first();
        
        //if user blocked.
        if($userifb->isblocked!= '0')
        {
            return view('blocked');
        }

        return view('level',compact('user','userlev','level','error'));
    }

    public function findorcreate($cuser)
    {
        if ( $authUser = UserLevel::where('user_id', $cuser->id)->first()) {
            return $authUser;
        }

        Blacklist::create([
            'user_id' =>$cuser->id,
        ]);

        return UserLevel::create([
            'user_id' => $cuser->id,
            'level' => '0',
        ]);
    }

    public function chgame()
    {
        $user=Auth::user();
        $answers=Input::get('answer');
        $userlev = $this->findorcreate($user);
        $level = $userlev->level;
        if($answers == 'annauniv')
        {
            $error='n';
            $solvedtime = (new \DateTime())->format('Y-m-d H:i:s');
            $userlev->solved = $solvedtime;
            $userlev->level = $userlev->level + 1;
            $userlev->save();
            return redirect('/game');
        }
        else{
            $error = 'y';
            return view('level',compact('user','userlev','level','error'));
        }
    }
}
