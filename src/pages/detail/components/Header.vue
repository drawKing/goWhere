<template>
    <div>
        <router-link class="header-abs" tag="div" to="/" v-show="showAbs">
            <span class="iconfont header-abs-back">&#xe624;</span>
        </router-link>
        <div class="header-fixed" v-show="!showAbs" :style="opacityStyle">
            景点介绍
            <router-link to="/">
                <div class="iconfont header-fixed-back">&#xe624;</div>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name:"DetailHeader",
    data () {
        return {
            showAbs: true,
            opacityStyle: {
                opacity: 0
            } 
        }
    },
    methods: {
        handleScroll () {
            const top = document.documentElement.scrollTop
            if(top > 60){
                let opacity = top / 140
                opacity = (opacity > 1 ? 1 : opacity)
                this.opacityStyle = {
                    opacity
                }
                this.showAbs = false
            }else{
                this.showAbs = true
            }
        }
    },
    mounted () {
        window.addEventListener('scroll',this.handleScroll)
    },
    destroyed () {
        window.removeEventListener('scroll',this.handleScroll)
    }
    
}
</script>

<style lang="stylus" scoped>
@import '~styles/varibles.styl';
.header-abs
    position absolute
    left .2rem
    top .2rem
    width .8rem
    height .8rem
    border-radius .4rem
    text-align center
    line-height .8rem
    background rgba(0,0,0,.8)
    .header-abs-back
        color #ffffff
        font-size .4rem
.header-fixed
    position fixed
    z-index 2
    top 0
    left 0
    right 0
    height $headerHeight
    line-height $headerHeight
    text-align center
    color #fff
    background $bgColor
    font-size .32rem
    .header-fixed-back
        width .64rem
        font-size .4rem
        text-align center
        position absolute
        left 0
        top 0
        color #ffffff
</style>
