// 递归组件，组件自身调用组件自身
<template>
    <div class="listWrapper">
        <!-- <div class="item" v-for="(item,index) of list" :key="index">
            <div class="item-title border-bottom" @click="toggleChildren">
                <span class="item-title-icon"></span>
                {{item.title}}
            </div>
            <div v-if="showChildren" class="item-children" >
                <detail-list :list="item.children" ></detail-list>
            </div>
        </div> -->
        <Tabs value="name1">
            <TabPane label="优惠套餐" name="name1">
                <Tree :data="list" class="treeList"></Tree>
            </TabPane>
            <TabPane label="一日游" name="name2">
                <Tree :data="onedayList" class="treeList"></Tree>
            </TabPane>
        </Tabs>
        
    </div>
</template>

<script>
export default {
    name: "DetailList",
    props: {
        list: Array,
        onedayList: Array
    },
    data () {
        return {
            showChildren: false,
        }
    }
}
</script>

<style lang="stylus">
@import '~styles/varibles.styl';
.listWrapper
    width 100%
    margin-top .2rem
    .ivu-tabs-bar
        margin 0
        width 100%
        line-height 40px
        background white
    .ivu-tabs-tab .ivu-tabs-tab-active .ivu-tabs-tab-focused
        padding 8px 0
    .ivu-tabs-tab
        margin-right 0px
        width 50vw
        text-align center
    .ivu-tabs-ink-bar .ivu-tabs-ink-bar-animated
        width 100vw
    span .ivu-tree-children
        padding 0
    ul .ivu-tree-children
        background white
        height 35px
        padding-left 15px
        line-height 35px
        li
            margin 0   
    .ivu-tree ul
        font-size .28rem
    .ivu-tree ul li
        text-indent 5px
    .item-title-icon
        position relative
        left .06rem
        top .06rem
        display: inline-block;
        width: .36rem;
        height: .36rem;
        background: url(http://s.qunarzz.com/piao/image/touch/sight/detail.png) 0 -.45rem no-repeat;
        margin-right: .1rem;
        background-size: .4rem 3rem;
    .item-title
        line-height .8rem
        font-size .32rem
        padding 0 .2rem
    .item-children
        padding 0 .2rem
</style>
