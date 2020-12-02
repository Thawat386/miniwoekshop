<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
      //  auth()->user()->assignRole(['manager']);
        if(auth()->user()->hasRole("admin")){
            // $user=auth()->user();
            // $user->syncPermissions(['manageuser','addpost','editpost','deletepost','readpost']);
                return view('admin');
        }else{
        //     $user=auth()->user();
        // $user->syncPermissions(['addpost','editpost','deletepost','readpost']);
                return view('home');
        }
    }
}
