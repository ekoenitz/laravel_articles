import ArticleListing from '@/Components/ArticleListing';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
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
    const [filterValue, setFilterValue] = useState("");

    // To-do: make into one function all can share and put the input form into another file
    function changeFilterType(selected) {
        setFilterType(selected.target.value);
    }

    function changeFilterValue(text) {
        setFilterValue(text.target.value);
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
            <input 
                className="w-33 p-2.5 text-gray-500 bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-indigo-600"
                defaultValue={filterValue}
                onChange={changeFilterValue}
            />
            <button
                className="w-33 p-2.5 text-white bg-black border rounded-md shadow-sm outline-none appearance-none focus:border-indigo-600"
            > 
                <Link href={route("dashboard", {filter_type: filterType, filter_value: filterValue})}>
                    Filter
                </Link>
            </button>
            {renderArticles(articles)}

        </AuthenticatedLayout>
    );
}
