<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;

class AdministratorController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.administrator.list');
    }
}