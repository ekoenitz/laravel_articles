import ArticleListing from '@/Components/ArticleListing';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useState } from 'react';

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

// Source for dropdown: https://larainfo.com/blogs/react-tailwind-css-dropdowns-menu-example
export default function Dashboard({ auth, articles }) {
    const [filterType, setFilterType] = useState("all");

    function changeFilterType(selected) {
        setFilterType(selected.target.value);
    }

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />
            <select 
                className="w-33 p-2.5 text-gray-500 bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-indigo-600"
                defaultValue={filterType}
                onChange={changeFilterType}
            >
                <option value="all">Show All</option>
                <option value="author">Author</option>
                <option value="genre">Genre</option>
                <option value="creation_date">Date of Publication</option>
            </select>
            {renderArticles(articles)}

        </AuthenticatedLayout>
    );
}
