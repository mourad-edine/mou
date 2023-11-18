import './assets/style.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './rout/routers.js'

createApp(App).use(router).mount('#app')
