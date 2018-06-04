<template>
<div class="topView">
    <div class="title">
            <span class="iconfont topHuo">&#xe6e7;</span>
            <b>本周热门榜单</b>
            <span class="moreTop">全部榜单 ></span>
    </div>
    <div class="tab" ref="tab">
        <ul class="tab_content" ref="tabWrapper">
            <li class="tab_item" v-for="item in itemList" ref="tabitem" :key="item.id">
                <img class="item-img" :src="item.imgUrl">
                <p class="item-title">{{item.title}}</p>
                <p class="item-price">{{item.price}}</p>
            </li>
        </ul>
    </div>
 </div>
 </template>
 <script>
 import BScroll from 'better-scroll';
  export default {
   data() {
    return{
     itemList:[
            {
            "id":"1",
            "title":"故宫",
            "price":"￥36起",
            "imgUrl":"http://img1.qunarzz.com/sight/p0/1409/19/adca619faaab0898245dc4ec482b5722.jpg_150x150_06cb3e52.jpg"
            },
            {
                "id":"2",
            "title":"十渡聚龙湾玻璃栈道",
            "price":"￥33.8起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/1704/d6/d62a708bc69472f5a3.img.jpg_150x150_54ba6c62.jpg"
            },
            {
                "id":"3",
            "title":"仙女洞",
            "price":"￥42起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/1708/2b/2b3b94de99c0a425a3.img.jpg_150x150_2dec3e78.jpg"
            },
            {
                "id":"4",
            "title":"花卉观园",
            "price":"￥56起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/1508/c0/0ddded36771ed10c9e03eb64794610cb.water.jpg_150x150_69bf7d53.jpg"
            },
            {
                "id":"5",
            "title":"颐和园",
            "price":"￥26起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/1803/7b/7b023b9728f0834fa3.img.jpg_150x150_821b641d.jpg"
            },
            {
                "id":"6",
            "title":"北京欢乐谷",
            "price":"￥115起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/1505/d2/d274c92de14c93da.water.jpg_150x150_2747e538.jpg"
            },
            {
                "id":"7",
            "title":"水魔方",
            "price":"￥36起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/1508/a5/4003f9dd7bebf61eccbf64046e26d487.water.jpg_150x150_27594131.jpg"
            },
            {
                "id":"8",
            "title":"颐和园",
            "price":"￥26起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/201405/23/0265195fc4b7913a758674357c3cc8f6.jpg_150x150_ba1070d2.jpg"
            },
            {
                "id":"9",
            "title":"长春缆车",
            "price":"38起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/201306/13/bdf22f69fab0ee4ec8d65eac.jpg_150x150_35b4b15f.jpg"
            },
            {
                "id":"10",
            "title":"颐和园",
            "price":"￥26起",
            "imgUrl": "http://img1.qunarzz.com/sight/p0/1803/7b/7b023b9728f0834fa3.img.jpg_150x150_821b641d.jpg"
            }
        ]
    }
   },
   created() {
    this.$nextTick(() => {
     this.InitTabScroll();
    });
   },
   methods:{
    InitTabScroll(){
     let width=0
     for (let i = 0; i <this.itemList.length; i++) {
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
            font-size .1rem
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