import './bootstrap';
import { createApp } from 'vue';
import { createPinia } from 'pinia'
import App from './App.vue';
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';
import 'ant-design-vue/dist/reset.css';
import {Button,
        message,
        Drawer,
        Menu
        }
      from 'ant-design-vue'
import router from './router/index.js';

const pinia = createPinia()
const app = createApp(App);
app.use(router);
app.use(Button);
app.use(Drawer);
app.use(Menu)
app.use(pinia)
app.mount('#layout-wrapper')

app.config.globalProperties.$message = message;