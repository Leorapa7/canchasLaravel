<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Cache;
use Cookie;
use Session;

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
        //$existe = Cache::has('id');

        // if (Cache::has('id')){
        //     echo 'reserva';
        //     return redirect('/reservasTriCancha');

        // }else{
        //     return view('index');
        // }

        $value = session('id');
        if($value != null) {
          return redirect('/reservasTriCancha');
        } else {
          return redirect('/');
        }
    }
}
