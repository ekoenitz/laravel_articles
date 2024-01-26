import React from 'react';
import { Link } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';

export default function ArticleListing({article}) {
    const { i18n } = useTranslation();
    return (
        <div className="py-3">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Link href={route("article", article.id)}>
                    <div className="bg-white bg-auto hover:bg-sky-100 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="font-bold px-6 pt-3 pb-1 text-gray-900">{article.title[i18n.language]}</div>
                        <div className="px-6 pt-1 pb-1 text-gray-900">{article.description[i18n.language]}</div>
                        <div className="px-6 pt-1 pb-3 text-gray-400 text-sm">
                            {`${article.genre} | ${article.author_name} | ${article.created_at}`}
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    );
}