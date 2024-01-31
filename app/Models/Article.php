<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Enums\Genres;
use App\Models\User;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'content',
        'genre',
        'total_views',
        'author_id',
        'created_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'genre' => Genres::class,
        'created_at'  => 'datetime:Y-m-d H:00',
        'content' => 'array',
        'description' => 'array',
        'title' => 'array',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
