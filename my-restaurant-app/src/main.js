import './assets/main.css'

import { createApp } from 'vue'
import LogView from './views/LogView.vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import RegisterView from './views/RegisterView.vue'
import MenuView from './views/MenuView.vue'

const router = createRouter({
    routes: [{
      path: '/',
      component: LogView
    }, 
    {
        path:'/register',
        component:MenuView
    }],
    history: createWebHistory()
  })
  
  const app = createApp(App)
  app.use(router)
  app.mount('#app')
