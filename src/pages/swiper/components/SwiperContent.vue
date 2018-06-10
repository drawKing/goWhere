<template>
<div>
    <div class="wrapper"  v-for="(item,index) in swiperContentList" :key="index">
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
    data () {
        return {
            "swiperContentList":[{
                "index": "001",
                "imgUrl": "https://imgs.qunarzz.com/sight/p0/1409/19/adca619faaab0898245dc4ec482b5722.jpg_110x110_fac6a6cd.jpg",
                "titleName": "故宫(5A)",
                "titlePrice": "￥20",
                "titleTab": "古建筑 世界遗产 博物馆排名第一",
                "leftOne": "【预售上午场】故宫成人票",
                "rightOne": "￥60",
                "leftTwo": "【预售下午场】故宫成人票",
                "rightTwo": "￥80"
            },{
                "index": "002",
                "imgUrl": "https://imgs.qunarzz.com/sight/p0/1704/d6/d62a708bc69472f5a3.img.jpg_110x110_57b14b56.jpg",
                "titleName": "十渡聚龙湾玻璃栈道",
                "titlePrice": "￥35",
                "titleTab": "悬空观景",
                "leftOne": "十渡聚龙湾玻璃栈道+3D栈道",
                "rightOne": "￥35",
                "leftTwo": "十渡聚龙湾玻璃栈道+3D栈道+竹筏",
                "rightTwo": "￥55"
            },{
                "index": "003",
                "imgUrl": "https://imgs.qunarzz.com/sight/p0/1505/d2/d274c92de14c93da.water.jpg_110x110_d9d85877.jpg",
                "titleName": "颐和园(5A)",
                "titlePrice": "￥48",
                "titleTab": "必游景点 园林排名第一",
                "leftOne": "颐和园+导游讲解服务（每15分钟一场）",
                "rightOne": "￥56",
                "leftTwo": "颐和园+导游讲解服务（09:00场）",
                "rightTwo": "￥56"
            },{
                "index": "004",
                "imgUrl": "https://imgs.qunarzz.com/sight/p0/1508/a5/4003f9dd7bebf61eccbf64046e26d487.water.jpg_110x110_e23a9143.jpg",
                "titleName": "北京欢乐谷(4A)",
                "titlePrice": "￥39",
                "titleTab": "娱乐先锋 游乐场排名第二",
                "leftOne": "【旅游日活动票】北京欢乐谷夜场成人票",
                "rightOne": "￥188",
                "leftTwo": "[夜场]北京欢乐谷成人票",
                "rightTwo": "￥198"
            },{
                "index": "005",
                "imgUrl": "https://imgs.qunarzz.com/sight/p0/1507/36/ce3d2d6c9ab44d67ae68d940b8781829.water.jpg_110x110_52cd713d.jpg",
                "titleName": "北京野生动物园(4A)",
                "titlePrice": "￥70",
                "titleTab": "溜娃 动物园排名第一",
                "leftOne": "北京野生动物园成人票",
                "rightOne": "￥122",
                "leftTwo": "北京野生动物园学生票/老人票",
                "rightTwo": "￥72"
            }]
        }
    }
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
