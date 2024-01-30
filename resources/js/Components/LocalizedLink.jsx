import React from 'react';
import { Link } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';

export default function LocalizedLink(props) {
    const {path, args, children} = props;
    const { i18n } = useTranslation();
    return (
        <Link href={route(path, [i18n.language].concat(args))} {...props}>
            {children}
        </Link>
    )
}