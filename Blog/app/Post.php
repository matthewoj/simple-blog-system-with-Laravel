<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'user_id', 'active', 'title', 'body', 'published_at',
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at', 'published_at',
    ];
}
