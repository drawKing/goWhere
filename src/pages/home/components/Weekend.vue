<template>
    <div class="weekWrap">
        <div class="title">
            <span class="iconfont like">&#xe605;</span>
            <b>周末去哪儿</b>
            <span class="moreAdv">猜你喜欢 ></span>
        </div>
        <ul>
            <li class="item border-bottom"  v-for="item of list" :key="item.id">
                <div class="item-img-wrapper">
                    <img class="item-img" :src="item.imgUrl">
                </div>
                <div class="item-info">
                    <p class="item-title">{{item.title}}</p>
                    <p class="item-desc">{{item.desc}}</p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "HomeWeekend",
    props:{
        list:Array
    }
}
</script>

<style lang="stylus" scoped>
@import '~styles/mixins.styl'
.weekWrap
    background white
    padding-bottom 50%
    .title
        text-indent .2rem
        margin-top .2rem
        padding-top .3rem
        line-height .5rem
        font-size .3rem
        color #212121
        .like
            color red
            font-size .37rem
        .moreAdv
            float right 
            font-size 12px
            padding-right .5rem
    .item
        margin-top .1rem
        .item-img-wrapper
            height 0
            padding-bottom 37.09%
            overflow hidden 
            .item-img
                width 100%
        .item-info
            padding .1rem 0 .1rem .2rem
            .item-title
                line-height .54rem
                font-size .3rem
                ellipsis()
            .item-desc
                line-height .4rem
                color #cccccc
                ellipsis()
</style>
