<template>
    <div class="recommend_wrap">
        <div class="title">
            <span class="iconfont like">&#xe67b;</span>
            <b>热销推荐</b>
            <span class="moreAdv">更多推荐 ></span>
        </div>
        <ul>
            <router-link 
                class="item border-bottom" 
                 v-for="item of list" 
                 :key="item.id"
                 tag="li"
                 :to=" '/detail/' + item.id "
                >
                <img class="item-img" :src="item.imgUrl">
                <div class="item-info">
                    <b><p class="item-title">{{item.title}}</p></b>
                    <p class="item-desc">{{item.desc}}</p>
                    <div class="item-button">
                        {{item.price}}
                        <span>起</span>
                        <p class="item-local">{{item.local}}</p>
                    </div> 
                </div>
            </router-link>
        </ul>
    </div>
</template>

<script>
export default {
    name: "HomeRecommend",
    props:{
        list:Array
    }
}
</script>

<style lang="stylus" scoped>
@import '~styles/mixins.styl'
.recommend_wrap
    height 330px
    // padding-bottom 88% 
    background white
    text-indent .2rem
    .title
        margin-top .2rem
        padding-top .3rem
        line-height .5rem
        font-size .3rem
        color #212121
        .like
            color red
            font-size .35rem
        .moreAdv
            float right 
            font-size 12px
            padding-right .5rem
    ul
        padding-left .1rem
        .item
            display flex
            height 1.8rem
            margin-bottom .1rem
            overflow hidden
            .item-img
                width 1.7rem
                height 1.7rem
                padding .1rem
            .item-info
                flex 1
                min-width 0
                padding .1rem 0
                .item-title
                    line-height .44rem
                    font-size .30rem
                    ellipsis()
                .item-desc
                    line-height .4rem
                    color #cccccc
                    ellipsis()
                .item-button
                    margin-top .16rem
                    line-height .44rem
                    padding 0
                    font-size .37rem
                    color red
                    span 
                        font-size .2rem
                        color black
                    .item-local
                        float right 
                        padding-right .5rem
                        color black 
                        font-size  10px
                        color #616161
                
                    
</style>
