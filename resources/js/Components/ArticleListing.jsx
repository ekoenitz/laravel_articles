import React from 'react';

export default function ArticleListing(props) {
    return (
        <div className="py-3">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white bg-auto overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="font-bold px-6 pt-3 pb-1 text-gray-900">{props.title}</div>
                    <div className="px-6 pt-1 pb-3 text-gray-900">{props.description}</div>
                </div>
            </div>
        </div>
    );
}