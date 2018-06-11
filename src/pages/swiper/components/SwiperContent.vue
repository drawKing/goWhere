<template>
<div>
    <div class="wrapper"  v-for="(item,index) in list" :key="index">
        <div class="contentOne">
            <div class="picContent"><img class="Img" :src="item.imgUrl"></div>
            <div class="title">
                <p class="titleName">{{item.titleName}}</p>
                <p class="titlePrice">{{item.titlePrice}}</p>
                <p class="titleTab">{{item.titleTab}}</p>
            </div>
        </div>
        <div class="contentTwo">
            <div class="ticket">
                <p class="left">{{item.leftOne}}</p>
                <p class="right">{{item.rightOne}}</p>
            </div>
            <div class="ticket">
                <p class="left">{{item.leftTwo}}</p>
                <p class="right">{{item.rightTwo}}</p>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    name: "swiperContent",
    props: {
        list: Array
    },
}
</script>

<style lang="stylus" scoped>
.wrapper
    width 100%
    background white
    margin-bottom .2rem
.contentOne
    display flex
    padding 10px 11px
    .picContent
        width 100px
        height 100px
        .Img
            width 100px
            height 100px
    .title
        position relative
        width 97%
        padding-left 3%
        height 100px
        .titleName
            font-size .32rem
            position absolute
            left 10px
            top 2px
        .titlePrice
            color red
            font-size .32rem
            position absolute
            left 10px
            top 50px
        .titleTab
            font-size .18rem
            color #6fd2df    
            position absolute
            left 10px
            bottom  0
.contentTwo
    width 100%
    background white
    .ticket
        border-top 1px solid #f1f1f1
        width 100%
        height 48px
        line-height 48px
        font-size .28rem
        .left
            float left
            margin-left 10px
        .right
            float right 
            margin-right 10px
        
</style>
