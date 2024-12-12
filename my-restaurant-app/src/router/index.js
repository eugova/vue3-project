import { createRouter, createWebHistory } from 'vue-router';
import LogView from '../views/LogView.vue';
import RegisterView from '../views/RegisterView.vue';
import MenuView from '../views/MenuView.vue'

const router = createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes: [
		{
			path: '/',
			name: 'LogView',
			component: LogView,
		},
		{
			path: '/registration',
			name: 'RegisterView',
			component: RegisterView,
		},
		{
			path: '/menu',
			name: 'MenuView', 
			component: MenuView,
		}
	],
})

export default router;

