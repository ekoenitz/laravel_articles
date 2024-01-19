import React from 'react';
import { useState } from 'react';
import { Link } from '@inertiajs/react';

export default function ArticleFilters() {
    const [filterType, setFilterType] = useState("all");
    const [filterValue, setFilterValue] = useState("");

    // To-do: make into one function if possible
    function changeFilterType(selected) {
        setFilterType(selected.target.value);
    }

    function changeFilterValue(text) {
        setFilterValue(text.target.value);
    }

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
                <Link href={route("dashboard", {filter_type: filterType, filter_value: filterValue})}>
                    Filter
                </Link>
            </button>
        </div>
    );
}