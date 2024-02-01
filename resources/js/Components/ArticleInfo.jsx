import React from 'react';
import { useTranslation } from 'react-i18next';

export default function ArticleInfo({article}) {
    const { t } = useTranslation();
        return (
        <div className="px-6 pt-1 pb-3 text-gray-400 text-sm">
            {`${article.views} ${t("articleInfo.views")} | ${article.genre} | ${article.author_name} | ${article.created_at}`}
        </div>
    );
}