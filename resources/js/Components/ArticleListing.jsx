import React from 'react';
import { useTranslation } from 'react-i18next';
import LocalizedLink from './LocalizedLink';
import ArticleInfo from './ArticleInfo';

export default function ArticleListing({article}) {
    const { i18n } = useTranslation();
        return (
        <div className="py-3">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <LocalizedLink path="article" args={{id: article.id}}>
                    <div className="bg-white bg-auto hover:bg-sky-100 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="font-bold px-6 pt-3 pb-1 text-gray-900">{article.title}</div>
                        <div className="px-6 pt-1 pb-1 text-gray-900">{article.description}</div>
                        <ArticleInfo article={article}/>
                    </div>
                </LocalizedLink>
            </div>
        </div>
    );
}