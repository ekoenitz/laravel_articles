import React from 'react';
import { router } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';

export default function LanguageDropdown() {
    const { t, i18n } = useTranslation();

    const changeLanguage = (selected) => {
        i18n.changeLanguage(selected.target.value);
        router.visit(route().current(), {
            method: "get",
            data: {...route().params, lang: i18n.language}
        });
    }

    // To-do: Fix language being reset by refresh: https://github.com/i18next/react-i18next/issues/1052
    return (
        <div>
            <select 
                className="w-28 p-2.5 text-gray-500 bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-indigo-600"
                defaultValue={i18n.language}
                onChange={changeLanguage}
            >
                <option value="en">{t("languages.en")}</option>
                <option value="ja">{t("languages.ja")}</option>
            </select>
        </div>
    );
}