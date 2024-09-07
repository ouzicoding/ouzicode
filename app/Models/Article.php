<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  Eloquent模块，是一个对象关系映射(ORM)
 *  表->模型
 * php artisan make:model Article
 */
class Article extends Model
{
    use HasFactory;

}
