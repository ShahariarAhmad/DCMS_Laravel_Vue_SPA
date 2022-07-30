import { createApp } from "vue";
import router from './src/router.js'
import App from './App.vue';
import SideBar from "./src/components/dashboard/SideBar.vue";

import VueCookies from 'vue-cookies'

// ES6 Modules or TypeScript









// window.axios = require('axios');
import axios from "axios";
window.axios = axios
const app = createApp(App);

app.use(VueCookies,{ expire: '7d'});
app.use(router);
app.component('side-bar',SideBar);



app.mount('#app');