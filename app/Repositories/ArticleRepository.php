<?php

namespace App\Repositories;

use App\Contract\ArticleRepositoryInterface;
use App\Enums\ArticleFilterTypes;
use App\Models\Article;
use Illuminate\Support\Facades\Log;

class ArticleRepository implements ArticleRepositoryInterface 
{
    private function applyFilter($query, $request) {
        // To-do: Make filtering by multiple types possible
        $filter_type = $request->get('filter_type');
        $filter_value = $request->get('filter_value');

        if (is_null($filter_type) || is_null($filter_value)) {
            return $query;
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

        return $query;
    }

    public function getAll($request) 
    {
        $query = Article::join('users', 'users.id', '=', 'articles.author_id');
        
        $query = $this->applyFilter($query, $request);

        return $query->get([
            'users.name as author_name',
            'articles.id',
            'articles.title',
            'articles.description',
            'articles.created_at',
            'articles.genre'
        ]);
    }

    public function getById($id)
    {
        return Article::find($id);
    }
}