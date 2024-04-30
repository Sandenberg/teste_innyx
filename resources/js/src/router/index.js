import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import ProductList from '../views/ProductList.vue';
import ProductDetail from '../views/ProductDetail.vue';
import ProductCreate from '../views/ProductCreate.vue';
import ProductEdit from '../views/ProductEdit.vue';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/products',
    name: 'ProductList',
    component: ProductList
  },
  {
    path: '/products/:id',
    name: 'ProductDetail',
    component: ProductDetail,
    props: true
  },
  {
    path: '/products/create',
    name: 'ProductCreate',
    component: ProductCreate
  },
  {
    path: '/products/:id/edit',
    name: 'ProductEdit',
    component: ProductEdit,
    props: true
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
