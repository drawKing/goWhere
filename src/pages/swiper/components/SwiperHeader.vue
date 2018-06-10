<template>
    <div>
        <ul class="header">
            <router-link to="/" tag="li" class="li1"><span class="iconfont back-icon">&#xe624;</span></router-link>
            <li class="li2"><input class="headerInput" type="text" placeholder="景点门票"></li>
            <li class="li3">搜索</li>
        </ul>
        <ul class="title">
            <li>全部分类</li>
            <li>推荐排序</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "swiperHeader"
}
</script>

<style lang="stylus" scoped>
.header
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
            text-align center
            background #f1f1f1
            border-radius 15px
    .li3
        min-width: 1.04rem
        font-size .28rem
.title
    display flex
    height 44px
    line-height 44px
    border-top 1px solid #f1f1f1
    border-bottom 1px solid #f1f1f1
    background white
    li
        flex 1
        text-align center
        font-size .28rem
    >:first-child::after
        content ""
        width 1px
        position absolute
        left 50%
        margin-left -.5px
        margin-top 7px
        
        height 30px
        background #f1f1f1
</style>
