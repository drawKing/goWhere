<template>
<div class="list" ref="wrapper">
    <div>
        <div class="area">
            <div class="title border-topbottom">当前城市</div>
            <div class="button-list">
                <div class="button-wrapper" >
                    <div class="button">北京</div>
                </div>
            </div>
        </div>
        <div class="area">
            <div class="title border-topbottom">热门城市</div>
            <div class="button-list">
                <div class="button-wrapper" v-for="item of hot" :key="item.id">
                    <div class="button">{{item.name}}</div>
                </div>
            </div>
        </div>
        <div class="area"  v-for="(item,key) of cities" :key="key">
            <div class="title border-topbottom">{{key}}</div>
            <ul class="item-list">
                <li class="item border-bottom" 
                    v-for="innerItem of item" 
                    :key="innerItem.id"
                >
                    {{innerItem.name}}
                </li>
            </ul>
        </div>
    </div>
</div>
</template>

<script>
import Bscroll from 'better-scroll'
export default {
    name:"CityList",
    props:{
        hot : Array,
        cities : Object
    },
    mounted () {
        this.scroll = new Bscroll(this.$refs.wrapper)
    }
}
</script>

<style lang="stylus" scoped>
@import '~styles/varibles.styl';
.border-topbottom
    &:before
        border-color #cccccc
    &:after
        border-color #cccccc
.border-bottom
    &:before
        border-color #cccccc
.list
    overflow hidden
    position absolute
    left 0
    top 1.58rem
    right 0 
    bottom 0
    .title
        line-height .54rem
        background #eeeeee
        padding-left .26rem
        color #666
    .button-list
        overflow hidden
        padding .1rem .6rem .1rem .1rem
        .button-wrapper
            width 33.33%
            float left
            .button
                padding .1rem 0
                text-align center
                margin .1rem
                border .02rem solid #cccccc
                border-radius .06rem
    .item-list
        .item 
            line-height .76rem
            color #666
            padding-left .2rem
</style>
