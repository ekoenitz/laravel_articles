import ArticleInfo from '@/Components/ArticleInfo';
import ArticleListing from '@/Components/ArticleListing';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useState } from 'react';
import { useTranslation } from 'react-i18next';

const updateValue = (setFunction) => (event) => {
    setFunction(event.target.value);
}

export default function ArticleView({ auth }) {
    const { t } = useTranslation();
    const [title, setTitle] = useState("");
    const [description, setDescription] = useState("");
    const [content, setContent] = useState("");

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">{t("create.title")}</h2>}
        >
            <Head title="Article" />

            <div className="pb-3"/>
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white bg-auto hover:bg-sky-100 overflow-hidden shadow-sm sm:rounded-lg">
                <input 
                    className="w-33 p-2.5 text-gray-500 bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-indigo-600"
                    defaultValue={title}
                    onChange={updateValue(setTitle)}
                />
                <input 
                    className="w-33 p-2.5 text-gray-500 bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-indigo-600"
                    defaultValue={description}
                    onChange={updateValue(setDescription)}
                />
                <input 
                    className="w-33 p-2.5 text-gray-500 bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-indigo-600"
                    defaultValue={content}
                    onChange={updateValue(setContent)}
                />
                </div>
            </div>

        </AuthenticatedLayout>
    );
}
