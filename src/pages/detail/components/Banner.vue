<template>
    <div>
        <div class="banner" @click="handleBannerClick">
            <img class="banner-img" :src="bannerImg">
            <div class="banner-info">
                <div class="banner-title">{{this.sightName}}</div>
                <div class="banner-number">
                    <span class="iconfont arrow-icon banner-icon">&#xe626;</span>
                    {{this.bannerImgs.length}}
                </div>
            </div>
            <ul class="banner-advice">
                
                <!-- 
                
                
                <p class="adv-summary">景点简介</p>
                <p class="adv-time">开放时间、贴士</p>
                <p class="adv-rightB"></p> -->
                <li class="adv-one">
                    <p class="adv-score">4.8</p>
                    <p class="adv-great"><b>很棒</b></p>
                    <p class="adv-comment">3360条评论 6条攻略</p>
                    <p class="adv-rightA iconfont"></p>
                    <p class="adv-border"></p>
                </li>
                <li class="adv-two">2</li>
            </ul>
        </div>
        <fade-animation>
            <common-gallary :imgs="bannerImgs" v-show="showGallary" @close="handleGallaryClose"></common-gallary>
        </fade-animation>
    </div>
</template>

<script>
import CommonGallary from 'common/gallary/Gallary.vue'
import FadeAnimation from 'common/fade/FadeAnimation.vue'
export default {
    name:"DetailBanner",
    props: {
        sightName: String,
        bannerImg: String,
        bannerImgs: Array
    },
    data () {
        return{
            showGallary: false,
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
        FadeAnimation
    }
}
</script>

<style lang="stylus" scoped>
.banner
    position relative
    color white
    overflow hidden
    height 0
    padding-bottom 66%
    .banner-advice
        position absolute
        left 0
        bottom 0
        width 100%
        min-height 60px
        background white
        border-top-left-radius 8px
        border-top-right-radius 8px
        display flex
        .adv-one
            float left
            flex 1
            height 60px
            .adv-score
                float left
                color red
                font-size .5rem
                margin .15rem 0 0 .2rem
            .adv-great
                float left
                color red
                font-size .3rem
                margin .30rem 0 0 .2rem
            .adv-comment
                position absolute
                left .2rem
                bottom .2rem
                color #9e9e9e
                font-size .1rem
            .adv-border
                width 2px
                height 45px
                background #f1f1f1
                margin-top 7.5px
                margin-left 100%
                
        .adv-two
            float left
            flex 1
            height 60px    
    .banner-img
        width 100%
    .banner-info
        position absolute
        left 0
        right 0
        bottom 60px
        z-index 10
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
