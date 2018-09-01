import Vue from 'vue';
import Vuex from 'vuex';
import state from './state';
import mutations from './mutations';

Vue.use(Vuex);
// 使用插件用Vue.use();

// new Vuex.Store 创建仓库
export default new Vuex.Store({
  // 状态
  state,
  // 用于引发状态改变的所有方法
  mutations
});
