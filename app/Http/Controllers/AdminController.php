<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('admin');
    }
    public function frp1()
    {
        return view('admin.frp1');
    }
    public function frp2()
    {
        return view('admin.frp2');
    }
    public function frp3mum()
    {
        return view('admin.frp3mum');
    }
    public function frp3sus()
    {
        return view('admin.frp3sus');
    }
    public function frb1()
    {
    return view('admin.frb1');
    }
    public function frb2()
    {
        return view('admin.frb2');
    }
    public function frt1()
    {
        return view('admin.frt1');
    }
    public function frt2()
    {
        return view('admin.frt2');
    }

}
