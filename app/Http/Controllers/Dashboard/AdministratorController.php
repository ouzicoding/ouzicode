<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Administrator;

class AdministratorController extends Controller
{
    //
    public function show()
    {
        return view('dashboard',[
            'users'=>Administrator::all(),
            'admin'=>Administrator::find(1)
        ]);
    }
}
