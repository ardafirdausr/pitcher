<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                
        return view('home.home', [
            'results' => Course::whereHas('user.profile', function($q){ 
                global $request;
                $q->where('kota_mengajar', 'like', $request->kota ?? "%%");
            })->orderBy('id')->paginate(8)
        ]);
    }
}
