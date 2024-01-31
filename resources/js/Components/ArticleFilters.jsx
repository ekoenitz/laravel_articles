import React from 'react';
import { useState } from 'react';
import { Link } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';
import { useSearchParams } from 'react-router-dom';
import LocalizedLink from './LocalizedLink';

export default function ArticleFilters() {
    const { t } = useTranslation();
    const [searchParams, setSearchParams] = useSearchParams();
    const [filterType, setFilterType] = useState(searchParams.get("filter_type") ?? "all");
    const [filterValue, setFilterValue] = useState(searchParams.get("filter_value") ?? "");

    // To-do: make into one function if possible
    function changeFilterType(selected) {
        // For some reason searchParams won't update unless you do it manually
        // To-do: Maybe find a less messy way to get the url parameters?
        setSearchParams({filter_type: selected.target.value, filter_value: filterValue});
        setFilterType(selected.target.value);
    }

    function changeFilterValue(text) {
        setSearchParams({filter_type: filterType, filter_value: text.target.value});
        setFilterValue(text.target.value);
    }

    // To-do: Make the filter bar look less ugly
    return (
        <div>
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
                <LocalizedLink 
                    path="dashboard" 
                    args={{filter_type: filterType, filter_value: filterValue}}
                >
                    {t("articleFilters.buttons.filter")}
                </LocalizedLink>
            </button>
        </div>
    );
}