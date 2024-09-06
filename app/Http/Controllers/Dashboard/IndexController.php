<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Administrator;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('dashboard',[
            'users'=>Administrator::all(),
            'admin'=>Administrator::find(1)
        ]);
    }
}
