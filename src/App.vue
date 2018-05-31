// App.vue是我们的主组件，所有页面都是在App.vue下进行切换的。可以理解为所有的路由也是App.vue的子组件
<!--单文件组件-->
<template>
  <div id="app">
    <!--keep-alive 是Vue的内置组件，能在组件切换过程中将状态保留在内存中，防止重复渲染DOM -->
    <keep-alive exclude="Detail">
        <!-- 显示的是当前路由地址所对应的内容-->
        <router-view/>
    </keep-alive>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>

</style>
