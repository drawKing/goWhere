<template>
    <div>
        <div class="title">热销推荐</div>
        <ul>
            <li class="item border-bottom"  v-for="item of recommendList" :key="item.id">
                <img class="item-img" :src="item.imgUrl">
                <div class="item-info">
                    <p class="item-title">{{item.title}}</p>
                    <p class="item-desc">{{item.desc}}</p>
                    <button class="item-button">查看详情</button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "HomeRecommend",
    data () {
        return {
            recommendList:[{
                id: "0001",
                imgUrl: "http://img1.qunarzz.com/sight/p0/1508/a5/4003f9dd7bebf61eccbf64046e26d487.water.jpg_200x200_7690e4cd.jpg",
                title: "大连圣亚海洋公园",
                desc: "大连圣亚海洋公园大连圣亚海洋公园大连圣亚海洋公园"
            },{
                id: "0002",
                imgUrl: "http://img1.qunarzz.com/sight/p0/1508/a5/4003f9dd7bebf61eccbf64046e26d487.water.jpg_200x200_7690e4cd.jpg",
                title: "大连圣亚海洋公园",
                desc: "大连圣亚海洋公园大连圣亚海洋公园大连圣亚海洋公园"
            },{
                id: "0003",
                imgUrl: "http://img1.qunarzz.com/sight/p0/1508/a5/4003f9dd7bebf61eccbf64046e26d487.water.jpg_200x200_7690e4cd.jpg",
                title: "大连圣亚海洋公园",
                desc: "大连圣亚海洋公园大连圣亚海洋公园大连圣亚海洋公园"
            }]
        }
    }
}
</script>

<style lang="stylus" scoped>
@import '~styles/mixins.styl'
.title
    margin-top .2rem
    line-height .8rem
    background #eeeeee
    text-indent .2rem
.item
    display flex
    height 1.9rem
    overflow hidden
    .item-img
        width 1.7rem
        height 1.7rem
        padding .1rem
    .item-info
        flex 1
        min-width 0
        padding .1rem
        .item-title
            line-height .54rem
            font-size .32rem
            ellipsis()
        .item-desc
            line-height .4rem
            color #cccccc
            ellipsis()
        .item-button
            margin-top .16rem
            line-height .44rem
            background #ff9300
            padding 0 .2rem
            border-radius .06rem
</style>
