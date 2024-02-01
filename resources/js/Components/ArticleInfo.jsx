import React from 'react';
import { useTranslation } from 'react-i18next';

export default function ArticleInfo({article}) {
    const { i18n } = useTranslation();
        return (
        <div className="px-6 pt-1 pb-3 text-gray-400 text-sm">
            {`${article.genre} | ${article.author_name} | ${article.created_at}`}
        </div>
    );
}