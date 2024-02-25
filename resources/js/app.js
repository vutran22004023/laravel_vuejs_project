import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue';
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';

import router from './router/index.js';
createApp(App).use(router).mount("#app");