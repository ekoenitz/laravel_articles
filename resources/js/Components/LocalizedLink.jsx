import React from 'react';
import { Link } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';

export default function LocalizedLink({path, args, children}) {
    const { i18n } = useTranslation();
    return (
        <Link href={route(path, [i18n.language].concat(args))}>
            {children}
        </Link>
    )
}