<?php

namespace App\Repositories;

use App\Contract\ArticleRepositoryInterface;
use App\Enums\ArticleFilterTypes;
use App\Models\Article;
use Illuminate\Support\Facades\Log;

class ArticleRepository implements ArticleRepositoryInterface 
{
    public function getAll($request) 
    {
        $query = Article::join('users', 'users.id', '=', 'articles.author_id');
        
        $filter_type = $request->get('filter_type');
        $filter_value = $request->get('filter_value');
        // To-do: Clean up this whole return get business
        if (is_null($filter_type) || is_null($filter_value)) {
            return $query->get([
                'users.name as author_name',
                'articles.title',
                'articles.description',
                'articles.created_at',
                'articles.genre'
            ]);
        }

        switch($filter_type) {
            // To-do: Find a way to compare correctly without ->value
            case ArticleFilterTypes::AUTHOR->value:
                $query = $query->where('name', $filter_value);
                break;
            case ArticleFilterTypes::DATE->value:
                $query = $query->whereDate('articles.created_at', $filter_value);
                break;
            case ArticleFilterTypes::GENRE->value:
                $query = $query->where('genre', $filter_value);
                break;
            default:
                break;
        }

        return $query->get([
            'users.name as author_name',
            'articles.title',
            'articles.description',
            'articles.created_at',
            'articles.genre'
        ]);
    }
}