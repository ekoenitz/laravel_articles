import React from 'react';

export default function ArticleListing({article}) {
    return (
        <div className="py-3">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white bg-auto overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="font-bold px-6 pt-3 pb-1 text-gray-900">{article.title}</div>
                    <div className="px-6 pt-1 pb-1 text-gray-900">{article.description}</div>
                    <div className="px-6 pt-1 pb-3 text-gray-400 text-sm">
                        {`${article.genre} | ${article.author_id} | ${article.created_at}`}
                    </div>
                </div>
            </div>
        </div>
    );
}