<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        'viewers',
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
        'viewers' => 'array',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function addViewer() {
        if (!in_array(Auth::id(), $this->viewers)) {
            $viewers = $this->viewers;
            array_push($viewers, Auth::id());
            $this->update([
                'viewers' => $viewers
            ]);
            $this->save();
        }
    }
}
