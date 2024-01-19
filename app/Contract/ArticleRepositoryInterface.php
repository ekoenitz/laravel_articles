<?php
// Source: https://dev.to/kasenda/use-repository-pattern-with-laravel-e8h
namespace App\Contract;

use App\Models\Article;

interface ArticleRepositoryInterface 
{
    public function getAll($request);
    /*public function getById(Article $article);
    public function delete(Article $article);
    public function create(array $attributes);
    public function update(Article $article, array $attributes);*/
}