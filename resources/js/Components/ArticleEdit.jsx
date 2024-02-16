import React from 'react';
import { useTranslation } from 'react-i18next';

export default function ArticleEdit({header, value, onChange}) {
    return (
        <div className="py-3">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="font-bold px-6 pt-3 pb-1 text-gray-900">{header}</div>
                    <input 
                        className="w-full bg-white bg-auto overflow-hidden shadow-sm sm:rounded-lg font-bold px-6 pt-3 pb-1 text-gray-900"
                        defaultValue={value}
                        onChange={onChange}
                    />
                </div>
        </div>
    );
}