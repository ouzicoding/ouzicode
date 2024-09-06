<?php

namespace App\Http\Controllers;


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
