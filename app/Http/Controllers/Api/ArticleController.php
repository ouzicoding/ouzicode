<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;
use App\Models\Article;

class ArticleController extends Controller
{


    public function index(): ArticleCollection
    {
        return new ArticleCollection(Article::paginate());
    }

    public function detail(string $id): ArticleResource
    {
        return new ArticleResource(Article::findOrFail($id));
    }

}
