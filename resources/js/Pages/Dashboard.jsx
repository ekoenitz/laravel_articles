import ArticleListing from '@/Components/ArticleListing';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

function renderArticles(articles) {
    return (
        <div>
            {articles.map((article, i) => 
                <ArticleListing 
                    title={article.title}
                    description={article.description} 
                />
            )}
        </div>
    )
}

export default function Dashboard({ auth, articles }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            {renderArticles(articles)}

        </AuthenticatedLayout>
    );
}
