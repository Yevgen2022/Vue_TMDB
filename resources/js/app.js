import './bootstrap';
import {createApp} from 'vue';
import App from './App.vue';
import router from './router/routes.js';
import { createI18n, useI18n } from 'vue-i18n'
import {languages} from "./i18n.js";
import{ defaultLanguage } from "./i18n.js";


const app = createApp(App);


//const messages = Object.assign(languages)
// Створюємо інстанс i18n
const i18n = createI18n({
    legacy:false,
    fallbackLocale: 'en',
    locale: defaultLanguage,
    messages: languages  // Передаємо об'єкт з перекладами

})

// Тут можна передати глобальні властивості
//app.config.globalProperties.$t = useI18n().t;  // Додаємо функцію перекладу глобально


app.use(router);
app.use(i18n);
app.mount('#app');
