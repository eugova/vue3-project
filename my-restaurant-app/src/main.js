import './assets/main.css'

import { createApp } from 'vue'
import LogView from './views/LogView.vue'
import router from './router'


const app = createApp(LogView);
app.use(router);
app.mount('#app');
