<template>
    <div>
        <div class="banner" @click="handleBannerClick">
            <img class="banner-img" src="//img1.qunarzz.com/sight/p0/1611/a6/a639aac6bd4cd6fca3.water.jpg_600x330_dfaf8a62.jpg">
            <div class="banner-info">
                <div class="banner-title">当当城儿童职业体验馆</div>
                <div class="banner-number"><span class="iconfont arrow-icon banner-icon">&#xe626;</span>39</div>
            </div>
        </div>
        <common-gallary :imgs="imgs" v-show="showGallary" @close="handleGallaryClose"></common-gallary>
    </div>
</template>

<script>
import CommonGallary from 'common/gallary/Gallary.vue'
export default {
    name:"DetailBanner",
    data () {
        return{
            showGallary: false,
            imgs:['http://img1.qunarzz.com/sight/p0/1611/89/8935f8d45bed7bd3a3.water.jpg_r_800x800_2bf6090e.jpg','http://img1.qunarzz.com/sight/p0/1611/1a/1aea4dc34af302cda3.water.jpg_r_800x800_72889d3f.jpg']
        }
    },
    methods: {
        handleBannerClick () {
            this.showGallary=true
        },
        handleGallaryClose () {
            this.showGallary=false
        }
    },
    components: {
        CommonGallary,
    }
}
</script>

<style lang="stylus" scoped>
.banner
    position relative
    color white
    overflow hidden
    height 0
    padding-bottom 55%
    .banner-img
        width 100%
    .banner-info
        position absolute
        left 0
        right 0
        bottom 0
        line-height .6rem
        display flex
        background-image linear-gradient(top,rgba(0,0,0,0),rgba(0,0,0,0.8))
        .banner-title
            flex 1
            font-size .32rem
            padding 0 .2rem
        .banner-number
            margin-top .14rem
            padding 0 .4rem
            height .32rem
            line-height .32rem
            border-radius .2rem
            background rgba(0,0,0,.8)
            font-size .24rem 
            .banner-icon
                margin-right .1rem
                font-size .3rem   
</style>
