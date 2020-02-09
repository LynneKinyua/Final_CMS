<?php

namespace App\Http\Controllers;

use App\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->roles ==='admin'){
            return view('admin.index');
        }elseif(Auth::user()->role === 'user'){
            $assigned_leads = Leads::where('assigned', Auth::id())->get();
            return view('user.index', ['assigned_leads' => $assigned_leads]);
        }
    
        return view('home');
    }
}
