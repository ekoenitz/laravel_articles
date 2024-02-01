<?php

namespace App\Repositories;

use App\Contract\ArticleRepositoryInterface;
use App\Enums\ArticleFilterTypes;
use App\Enums\SupportedLanguageCodes;
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
            'articles.genre',
            'articles.views',
        ]);
    }

    public function getAllLocalized($request) {
        $articles = $this->getAll($request);
        // To-do: Check lang against SupportedLanguageCodes
        $lang = $request->get("lang", SupportedLanguageCodes::ENGLISH->value);
        foreach($articles as $article) {
            $article->title = $article->title[$lang];
            $article->description = $article->description[$lang];
        }
        return $articles;
    }

    public function getById($id)
    {
        $article = Article::find($id);
        $article->addViewer();
        $article->author_name = $article->author->name;
        return $article;
    }

    public function getLocalizedById($lang, $id) 
    {
        $article = $this->getById($id);
        // To-do: Make this work for string lang
        /*if (!($lang instanceof SupportedLanguageCodes))
        {
            $lang = SupportedLanguageCodes::ENGLISH;
        }*/
        $lang = is_null($lang) ? SupportedLanguageCodes::ENGLISH->value : $lang;
        $article->title = $article->title[$lang];
        $article->description = $article->description[$lang];
        $article->content = $article->content[$lang];
        return $article;
    }
}