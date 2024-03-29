import ArticleInfo from '@/Components/ArticleInfo';
import ArticleListing from '@/Components/ArticleListing';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';

function renderArticles(articles) {
    return (
        <div>
            {articles.map((article, i) => 
                <ArticleListing 
                    article={article}
                />
            )}
        </div>
    )
}

export default function ArticleView({ auth, article }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">{article.title}</h2>}
        >
            <Head title="Article" />

            <div className="pb-3"/>
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white bg-auto hover:bg-sky-100 overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="font-bold px-6 pt-3 pb-1 text-gray-900">{article.description}</div>
                    <ArticleInfo article={article}/>
                    <div className="px-6 pt-1 pb-3 text-gray-900 whitespace-pre-line">{article.content}</div>
                </div>
            </div>

        </AuthenticatedLayout>
    );
}
