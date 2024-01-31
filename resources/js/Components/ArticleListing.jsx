import React from 'react';
import { useTranslation } from 'react-i18next';
import LocalizedLink from './LocalizedLink';

export default function ArticleListing({article}) {
    const { i18n } = useTranslation();
        return (
        <div className="py-3">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <LocalizedLink path="article" args={{id: article.id}}>
                    <div className="bg-white bg-auto hover:bg-sky-100 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="font-bold px-6 pt-3 pb-1 text-gray-900">{article.title}</div>
                        <div className="px-6 pt-1 pb-1 text-gray-900">{article.description}</div>
                        <div className="px-6 pt-1 pb-3 text-gray-400 text-sm">
                            {`${article.genre} | ${article.author_name} | ${article.created_at}`}
                        </div>
                    </div>
                </LocalizedLink>
            </div>
        </div>
    );
}