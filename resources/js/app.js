import './bootstrap';
import {createApp} from 'vue';
import App from './App.vue';
import router from './router/routes.js';
// import Index from "./components/Index.vue";


const app = createApp(App);


app.use(router);
app.mount('#app');
