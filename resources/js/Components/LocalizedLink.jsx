import React from 'react';
import { Link } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';

export default function LocalizedLink(props) {
    const {path, args, children} = props;
    const { i18n } = useTranslation();
    const request_args = typeof args == "object" ? {lang: i18n.language, ...args} : [i18n.language].concat(args);
    return (
        <Link href={route(path, request_args)} {...props}>
            {children}
        </Link>
    )
}