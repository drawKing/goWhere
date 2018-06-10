import Vue from 'vue';
import Router from 'vue-router';
import Home from '@/pages/home/Home.vue';
import City from '@/pages/city/City.vue';
import Detail from '@/pages/detail/Detail.vue';
import Swiper from '@/pages/swiper/Swiper.vue';

Vue.use(Router);

export default new Router({
  routes: [{
    path: '/',
    name: 'Home',
    component: Home
  }, {
    path: '/city',
    name: 'City',
    component: City
  }, {
    path: '/detail/:id',
    name: 'Detail',
    component: Detail
  }, {
    path: '/swiper/:id',
    name: 'Swiper',
    component: Swiper
  }],
  scrollBehavior (to, from, savedPosition) {
    return { x: 0, y: 0 };
  }
});
