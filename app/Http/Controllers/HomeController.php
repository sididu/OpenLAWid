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
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view('admin.settings');
    }
    public function tmp()
    {
    return view('tmp');
    }
    public function index()
    {
    return view('home');
    }
    public function dashboard2()
    {
        return view('dashboard2');
    }
    public function master()
    {
    return view('layouts.master');
    }

    public function rt1()
    {
        return view('kasus.rt1');
    }
    public function rp1()
    {
        return view('kasus.rp1');
    } 
    public function rp2()
    {
        return view('kasus.rp2');
    }
    public function rp3mum()
    {
        return view('kasus.rp3mum');
    }
    public function rp3sus()
    {
        return view('kasus.rp3sus');
    }
    public function rb1()
    {
        return view('kasus.rb1');
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
