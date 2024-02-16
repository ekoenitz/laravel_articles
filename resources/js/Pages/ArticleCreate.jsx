import ArticleEdit from '@/Components/ArticleEdit';
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
                <div>
                    <ArticleEdit
                        header={t("articleCreate.headers.title")}
                        value={title}
                        onChange={updateValue(setTitle)}
                    />
                    <ArticleEdit
                        header={t("articleCreate.headers.description")}
                        value={description}
                        onChange={updateValue(setDescription)}
                    />
                    <ArticleEdit
                        header={t("articleCreate.headers.content")}
                        value={content}
                        onChange={updateValue(setContent)}
                        isBig
                    />
                </div>
            </div>

        </AuthenticatedLayout>
    );
}
