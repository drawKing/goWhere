<template>
    <div>
        <div class="Bg"></div>
        <ul class="header">
            <router-link to="/" tag="li" class="li1"><span class="iconfont back-icon">&#xe624;</span></router-link>
            <li class="li2"><input class="headerInput" type="text" placeholder="景点门票"></li>
            <li class="li3">搜索</li>
        </ul>
        <ul class="title">
            <li  @click="displayBg">
                <Cascader :data="menuList">
                    <a href="javascript:void(0)">全部分类</a>
                </Cascader>
            </li>
            <li>
                <Cascader :data="recommendList">
                    <a href="javascript:void(0)">推荐排序</a>
                </Cascader>
            </li>
        </ul>
        
    </div>
</template>

<script>
export default {
    name: "swiperHeader",
    // methods: {
    //     displayBg () {
    //         alert(1)
    //     }
    // },
    data () {
        return {
             menuList: [{
                    value: 'quanbufenlei',
                    label: '全部分类',
                    children: [
                        {
                            value: 'quanbufenlei',
                            label: '全部分类',
                        },]
                }, {
                    value: 'wenhuaguji',
                    label: '文化古迹',
                    children: [
                        {
                            value: 'gujianzhu ',
                            label: '古建筑',
                        },
                        {
                            value: 'yizhi',
                            label: '遗址',
                        },{
                            value: 'simiao',
                            label: '寺庙',
                        },{
                            value: 'gujie',
                            label: '古街',
                        }
                    ],
                },{
                    value: 'nongjiadujia',
                    label: '农家度假',
                    children: [
                        {
                            value: 'dujiacun ',
                            label: '度假村',
                        },
                        {
                            value: 'caizhai',
                            label: '采摘',
                        },{
                            value: 'nongjiale',
                            label: '农家乐',
                        },{
                            value: 'shengtaiyuan',
                            label: '生态园',
                        }
                    ],
                },{
                    value: 'gongyuan',
                    label: '公园',
                    children: [
                        {
                            value: 'zhutigongyuan ',
                            label: '主题公园',
                        },
                        {
                            value: 'bolanyuan',
                            label: '博览园',
                        },{
                            value: 'shengtaiyuan',
                            label: '生态园',
                        },{
                            value: 'shidigongyuan',
                            label: '湿地公园',
                        },{
                            value: 'dizhigongyuan',
                            label: '地质公园',
                        }
                    ],
                },{
                    value: 'shineiyule',
                    label: '室内娱乐',
                    children: [
                        {
                            value: 'quanbuyule ',
                            label: '全部娱乐',
                        },
                        {
                            value: 'mishitaotuo',
                            label: '密室逃脱',
                        }
                    ],
                }],
            recommendList: [
                {
                    value: 'tuijianpaixu',
                    label: '推荐排序',
                },{
                    value: 'liwozuijin',
                    label: '离我最近',
                },{
                    value: 'renqizuigao',
                    label: '人气最高',
                }
            ]
        }
    }
}
</script>

<style lang="stylus" scoped>
.Bg
    width 100%
    height 1000px;
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
