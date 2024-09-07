<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Eloquent模块，是一个对象关系映射(ORM)
 * 表->模型
 *
 * @property int $id
 * @property string $name
 * @property string $avatar
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AdministratorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator query()
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Administrator whereUpdatedAt($value)
 */
	class Administrator extends \Eloquent {}
}

namespace App\Models{
/**
 * Eloquent模块，是一个对象关系映射(ORM)
 *  表->模型
 * php artisan make:model Article
 *
 * @property int $id
 * @property string $title 标题
 * @property string $cover 封面图
 * @property int $category_id 分类ID
 * @property string $browse 浏览量
 * @property int $status 状态:1未发布2已发布3已下架
 * @property string|null $deleted_at
 * @property int $administrator_id 管理员ID
 * @property string $keywords 关键词
 * @property string $description 描述
 * @property string $markdown 文章内容markdown
 * @property string $html 文章内容html
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ArticleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAdministratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereMarkdown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 */
	class Article extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

