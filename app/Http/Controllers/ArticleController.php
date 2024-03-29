<?php

namespace App\Http\Controllers;

use App\Contract\ArticleRepositoryInterface;
use App\Enums\SupportedLanguageCodes;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
    public function list(Request $request): Response
    {
        Log::debug("\n\n\n\nREQEUST: ".json_encode($request->all())."\n\n\n");
        return Inertia::render('Dashboard', [
            'articles' => $this->article_repository->getAllLocalized($request)
        ]);
    }

    public function show(Request $request): Response
    {
        $id = $request->get('id');
        if (is_null($id)) {
            return Inertia::render('ArticleNotFound');
        }
        $lang = $request->get('lang', SupportedLanguageCodes::ENGLISH->value);
        $article = $this->article_repository->getLocalizedById($lang, $id);
        if (is_null($article)) {
            return Inertia::render('ArticleNotFound');
        }
        return Inertia::render('ArticleView', [
            'article' => $article
        ]);
    }
}
