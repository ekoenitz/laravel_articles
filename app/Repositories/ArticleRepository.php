<?php

namespace App\Repositories;

use App\Contract\ArticleRepositoryInterface;
use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface 
{
    public function getAll() 
    {
        return Article::all();
    }
}