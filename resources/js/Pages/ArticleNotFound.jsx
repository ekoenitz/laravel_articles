import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';

export default function Dashboard({ auth, articles }) {
    const { t } = useTranslation();
    
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">{t("dashboard.title")}</h2>}
        >
            <Head title="Error" />
            {t("errors.article_not_found")}

        </AuthenticatedLayout>
    );
}
