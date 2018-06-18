<template>
    <div>
        <div class="Bg" v-show="blackBg" @click="clearBg"></div>
        <ul class="header">
            <router-link to="/" tag="li" class="li1"><span class="iconfont back-icon">&#xe624;</span></router-link>
            <li class="li2"><input class="headerInput" type="text" placeholder="景点门票"></li>
            <li class="li3">搜索</li>
        </ul>
        <ul class="title" ref="goTop" :class="{fixtop:show}" >
            <li @click="displayBg" >
                    <Cascader :data="list" v-model="nowMenuValue"  >
                        <a href="javascript:void(0)">全部分类</a>
                    </Cascader>
            </li>
            <li @click="displayBg">
                <Cascader :data="listTwo" v-model="nowRecommendValue">
                    <a href="javascript:void(0)">推荐排序</a>
                </Cascader>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "swiperHeader",
    props: {
        list: Array,
        listTwo: Array
    },
    methods: {
        displayBg () {
            this.blackBg = true
        },
        clearBg () {
            this.blackBg = false
        },
        handleScroll () {
            const headerTop = document.documentElement.scrollTop
            if(headerTop > 43){
               this.show = true 
            }else{
                this.show = false
            }
        }
    },
    mounted () {
        let _this = this
        window.addEventListener('scroll',_this.handleScroll)
    },
    destroyed () {
        let _this = this
        window.addEventListener('scroll',_this.handleScroll)
    },
    data () {
        return {
             blackBg:false,
             show:false,
             nowMenuValue: ['quanbufenlei','quanbufenlei'],
             nowRecommendValue: ['tuijianpaixu'],
        }
    }
}
</script>

<style lang="stylus" scoped>
.Bg
    width 100%
    height 100%;
    position fixed
    left 0
    top 0
    z-index 1
    background black 
    opacity 0.5
.title li:last-child
    >>> .ivu-select-dropdown
            height 120px
            .ivu-cascader-menu
                background white
                width 100%
                height 120px
>>>.ivu-cascader
    width 100%
    line-height 44px
    .ivu-cascader-rel a
        color black
        a:hover
            color red
>>>.ivu-select-dropdown
    width 100%
    height 240px
    background #f1f1f1
    left 0px !important 
    margin 0
    border-radius 0
    box-shadow 1px 1px 2px #cccccc
    .ivu-cascader-menu:first-child
        width 50%
        background white
        float left 
        height 200px
        padding 0 !important  
    .ivu-cascader-menu:last-child
        margin-right 0px
        background #f3f3f3
    .ivu-cascader-menu-item
            height 40px
            line-height 26px
            
.header 
    z-index 2
    position relative
    display flex
    width 100%
    height .86rem
    line-height .86rem
    background white
    color black
    text-align center
    .li1
        width .64rem
        .back-icon
            font-size .4rem
    .li2
        flex 1
        .headerInput
            border none
            width 100%
            color black 
            height 30px
            line-height 30px
            text-align center
            background #f1f1f1
            border-radius 15px
    .li3
        min-width: 1.04rem
        font-size .28rem
.title
    position relative
    z-index 2
    display flex
    height 45px
    line-height 45px
    background white
    border-bottom 1px solid #f1f1f1
    border-top 1px solid #f1f1f1
    li
        flex 1
        text-align center
        font-size .28rem
    >:first-child::after
        content ""
        width 1px
        position absolute
        z-index 3
        left 50%
        top 0
        margin-left -.5px
        margin-top 7px
        height 30px
        background #f1f1f1
.fixtop
    position fixed
    width 100vw
    top 0
    z-index 2
    display flex
    height 45px
    line-height 45px
    background white
    border-bottom 1px solid #f1f1f1
    border-top 1px solid #f1f1f1
    li
        flex 1
        text-align center
        font-size .28rem
    >:first-child::after
        content ""
        width 1px
        position absolute
        z-index 3
        left 50%
        top 0
        margin-left -.5px
        margin-top 7px
        height 30px
        background #f1f1f1
</style>
