<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Models\Article;

class IndexController extends Controller
{


    public function index(): ArticleCollection
    {
        return new ArticleCollection(Article::paginate());
    }


}
