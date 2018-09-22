<?php
一。城市选择字母表滚动
    使用betterscroll插件
    import Bscroll = from 'better-scroll';
    mounted(){
        this.scroll = new Bscroll(this.$refs.wrapper)
    }
二。Vue.$nextTick用法
    1.Vue实现响应式并不是数据发生变化之后DOM立即变化
    2.用途：需要在视图更新之后，基于新的视图进行操作
    3.Vue在修改数据之后，视图不会立即更新，而是等同一事件循环操作完成之后统一更新视图
    4.nextTick()里面的代码会在DOM更新之后立即执行
三。右侧字母表滚动，左侧城市列表随之滚动
    1.定义touchstart touchmove touchend三个方法，在Alphabet中定义data的属性：touchstatus为false;start时改status为true,
      end时定义status为false
    2.实现原理：获得字母表最上面A距离顶部的高度，滑动时看当前手指的字母距离顶部的高度，做一个差值，就能算出当前字母与A字母
      间的距离，在除以每个字母的高度，就可知道当前字母是谁。
四。keep-alive
    VUE内置组件，在组件切换过程中将状态保留在内存中，防止重复渲染DOM，包裹动态组件时，会缓存不活动的组件实例。
    而不是销毁他们。
五。VUEX：状态管理库
    1.当多个公用组件数据传值很困难时，把公用数据放到store库，Store由三部分组成：state,mutations,actions
    2.组件想修改数据，先调用Actions做一些批量处理，actions在调用mutations，进而mutations操作State.
六。项目的联调与上线
    1.config的index.js中修改配置项proxyTable
    2.更改为本机的IP地址

七。嵌套路由
        const routes = [
             { path: '/', redirect: '/home' },
            { 
                path: '/home', 
                component: Home, 
                children:[
                    { path: '/home/login', component: Login},
                    { path: '/home/reg', component: Reg}
                ]
            },
            { path: '/news', component: News}
        ]
八。MVVM
    MVVM中的View 和 ViewModel可以互相通信。也就是可以互相调用。MVVM，数据驱动视图，核心是VM ，
    可以把视图逻辑放在viewmodel中，让很多view重用这段视图逻辑。

九。v-if v-show
    v-if是动态的向DOM树内添加或者删除DOM元素；v-if适合运营条件不大可能改变；
    v-show是通过设置DOM元素的display样式属性控制显隐； v-show适合频繁切换。

十。router-View
    主要是构建 SPA (单页应用) 时，方便渲染你指定路由对应的组件.
    把router-view 当做是一个容器，它渲染的组件是你使用 vue-router 指定的。

十一。vue响应式原理
        vue将data初始化为一个Observer并对对象中的每个值，重写了其中的get、set，data中的每个key，都有一个独立的依赖收集器。
        在get中，向依赖收集器添加了监听
        在mount时，实例了一个Watcher，将收集器的目标指向了当前Watcher
        在data值发生变更时，触发set，触发了依赖收集器中的所有监听的更新，来触发Watcher.update
        1.实现一个监听器Observer，用来劫持并监听所有属性，如果有变动的，就通知订阅者。

        2.实现一个订阅者Watcher，可以收到属性的变化通知并执行相应的函数，从而更新视图。

        3.实现一个解析器Compile，可以扫描和解析每个节点的相关指令，并根据初始化模板数据以及初始化相应的订阅器。

十二。vue-router原理分析；常用于单页应用
    核心是更新视图而不重新请求页面
    1.Hash: 通过改变hash值
    2.History: 利用history对象新特性

十三。AJAX请求一般放在父组件上去调用，比如City.vue

十四。vue react 
    Vue和React不同点：
    1）Vue：1.模版和渲染函数的弹性选择
            2.简单的语法及项目创建
            3.更快的选软速度和更小的体积

    2）React:1.更适用于大型应用和更好的可测试性
            2.同时适用web端和原生App
            3.更大的生态圈带来更多的支持和工具

    Vue和React相同点：
    1.利用虚拟DOM实现快速渲染
    2.轻量级
    3.响应式组件
    4.服务器端渲染
    5易于集成路由工具，打包工具以及状态管理工具
    6.优秀的支持和社区

十五。vuex:假如在页面中直接修改state,而不是通过mutation 的commit方式修改，会怎么样?
1）共同点： 能够修改state里的变量，并且是响应式的（能触发视图更新）
2）不同点：
    若将vue创建 store 的时候传入 strict: true, 开启严格模式，那么任何修改state的操作，只要不经过
    mutation的函数，vue就会  throw error 
3)使用commit提交到mutation修改state的优点：
    vuex能够记录每一次state的变化记录，保存状态快照，实现时间漫游／回滚之类的操作。
