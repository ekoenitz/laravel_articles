<?php

namespace App\Repositories;

use App\Contract\ArticleRepositoryInterface;
use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface 
{
    public function getAll() 
    {
        return Article::join('users', 'users.id', '=', 'articles.author_id')
        ->get([
            'users.name as author_name',
            'articles.title',
            'articles.description',
            'articles.created_at',
            'articles.genre'
        ]);
    }
}