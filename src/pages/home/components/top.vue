<template>
<div class="topView">
    <div class="title">
            <span class="iconfont topHuo">&#xe6e7;</span>
            <b>本周热门榜单</b>
            <span class="moreTop">全部榜单 ></span>
    </div>
    <router-link to="/detail/ + item.id " tag="div">
        <div class="tab" ref="tab">
            <ul class="tab_content" ref="tabWrapper" >
                <li class="tab_item" v-for="item in list" ref="tabitem" :key="item.id">
                    <img class="item-img" :src="item.imgUrl">
                    <p class="item-title">{{item.title}}</p>
                    <p class="item-price">{{item.price}}</p>
                </li>
            </ul>
        </div>
    </router-link>
 </div>
 </template>
 <script>
 import BScroll from 'better-scroll';
  export default {
   props: {
       list: Array
   },
   updated() {
    this.$nextTick(() => {
     this.InitTabScroll();
    });
   },
   methods:{
    InitTabScroll(){
     let width=0
     for (let i = 0; i <this.list.length; i++) {
       width+=this.$refs.tabitem[0].getBoundingClientRect().width; //getBoundingClientRect() 返回元素的大小及其相对于视口的位置
     }
     this.$refs.tabWrapper.style.width=width+'px'
     this.$nextTick(()=>{
       if (!this.scroll) {
        this.scroll=new BScroll(this.$refs.tab, {
         startX:0,
         click:true,
         scrollX:true,
         scrollY:false,
         eventPassthrough:'vertical'
        });
       }else{
        this.scroll.refresh()
       }
     });
    }
   }
  };
 </script>
 <style lang="stylus" scoped>
 @import '~styles/mixins.styl'
 .topView
    width: 100vw;
    padding-left .2rem
    background white
    margin-top .2rem
    .title
        padding-top .2rem
        line-height .5rem
        font-size .3rem
        .topHuo
            color red
        .moreTop
            float right 
            font-size 12px
            padding-right .5rem
    .tab
        overflow: hidden;
        .tab_content
            display: flex;
            box-sizing border-box 
            .tab_item
                text-align center
                flex: 0 0 95px;
                overflow hidden
                border 2px solid white
                .item-title
                    width 100%  
                    ellipsis()
                    height .5rem
                    line-height .5rem
                .item-price
                    color red
                    height .5rem
                    line-height .5rem
                .item-img
                    width 100%
 </style>