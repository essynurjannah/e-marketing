<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard.home');
    }

    public function home(){
        return view('Dashboard.perumahan');
    }
    public function insertPerumahan(){
        return view('Dashboard.insertPerumahan');
    }

    public function viewLogin(){
        return view('Dashboard.login');
    }
}
