<?php

namespace App\Http\Controllers;

use App\Contract\ArticleRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class ArticleController extends Controller
{
    public function __construct(
        private ArticleRepositoryInterface $article_repository
    )
    {}

    /**
     * Display the registration view.
     */
    public function list(): Response
    {
        return Inertia::render('Dashboard', [
            'articles' => $this->article_repository->getAll()
        ]);
    }
}
