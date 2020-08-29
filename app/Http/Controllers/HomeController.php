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
        return view('dashboard.dashboard');
    }

    public function calendar()
    {
        // alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->showConfirmButton('Confirm', '#3085d6')->showCancelButton('Cancel');
        return view('calendar.calendar');
    }
    public function gallery()
    {
        return view('multimedia.gallery');
    }
    public function monitoring()
    {
        Alert::success('Success Title', 'Success Message');
        return view('monitoring.monitoring');
    }
    public function helpdesk()
    {
        return view('dashboard.helpdesk');
    }
    public function sales()
    {
        return view('dashboard.sales');
    }
    public function picasso()
    {
        return view('daily.picasso');
    }
    public function deposit()
    {
        return view('daily.deposit');
    }
    public function banana()
    {
        return view('daily.banana');
    }
    public function dashboard()
    {
        return view('dashboard.dashboardv1');
    }
}
