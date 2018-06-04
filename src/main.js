// main.js是我们的入口文件，主要作用是初始化vue实例并使用需要的插件。
// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue';
import App from './App';
import router from './router';
import fastClick from 'fastclick';
import VueAwesomeSwiper from 'vue-awesome-swiper';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
// import vueSeamlessScroll from 'vue-seamless-scroll';
import 'babel-polyfill';
import store from './store/index.js';
import 'styles/reset.css';
import 'styles/iconfont.css';

import 'swiper/dist/css/swiper.css';
import './assets/styles/border.css';

Vue.config.productionTip = false;
fastClick.attach(document.body);
Vue.use(VueAwesomeSwiper);
Vue.use(iView);
// Vue.use(vueSeamlessScroll);
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  vue: 'vue',
  components: { App },
  template: '<App/>'
});
// 路由就是根据网址不同返回不同的内容给用户
