<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * php artisan make:controller /Home/ArticleController
 */
class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.article.list');
    }
}
