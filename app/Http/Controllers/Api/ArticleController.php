<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;
use App\Models\Article;

/**
 * Class ArticleController
 * @package App\Http\Controllers\Api
 * @make php artisan make:controller Api\ArticleController
 */
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
