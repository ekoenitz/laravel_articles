// Source: https://www.freecodecamp.org/news/how-to-add-localization-to-your-react-app/
import i18n from "i18next";
import en_translations from "./locales/en/translations.json" with {type: "json"};
import ja_translations from "./locales/ja/translations.json" with {type: "json"};
import { initReactI18next } from "react-i18next";

i18n.use(initReactI18next).init({
    fallbackLng: 'en',
    lng: 'en',
    resources: {
        en: {
            translations: en_translations
        },
        ja: {
            translations: ja_translations
        }
    },
    ns: ['translations'],
    defaultNS: 'translations'
});

i18n.languages = ['en', 'ja'];

export default i18n;