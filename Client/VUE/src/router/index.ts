/**
 * router.js
 * @author: 一颗橘子唐
 * @description: 路由配置
 * @create: 2024年3月27日15:20:19
 */
import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/homePage.vue'),
    },
    {
      path: '/post',
      name: 'post',
      component: () => import('../views/postPage.vue'),
    },
    {
      path: '/edit',
      name: 'edit',
      component: () => import('../views/editPage.vue'),
    },
  ]
})

export default router
