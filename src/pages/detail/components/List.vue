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
        <!--<Tabs value="name1">-->
            <!--<TabPane label="优惠套餐" name="name1">-->
                <!--<Tree :data="list" class="treeList"></Tree>-->
            <!--</TabPane>-->
            <!--<TabPane label="一日游" name="name2">-->
                <!--<Tree :data="onedayList" class="treeList"></Tree>-->
            <!--</TabPane>-->
        <!--</Tabs>-->
      <Tabs value="name1">
        <TabPane label="优惠套餐" name="name1">
          <Collapse simple v-model="value1">
            <Panel name="1">
              基础套餐
              <p slot="content" style="height: 25px;">【1晚】1晚马累</p>
              <p slot="content">【4晚】4晚沙滩别墅STANDARD DELUXE</p>
            </Panel>
            <Panel name="2">
              升级套餐
              <p slot="content" style="height: 25px;">【沙滩别墅】1晚马累+2晚沙滩别墅</p>
              <p slot="content">【水上别墅】2晚水上别墅WATER</p>
            </Panel>
            <Panel name="3">
              VIP套餐
              <p slot="content" style="height: 25px;">【大牌·网红圣地】阿雅娜酒店</p>
              <p slot="content">【近购物中心】私人沙滩+热带花园</p>
            </Panel>
            <Panel name="4">
              金牌套餐
              <p slot="content" style="height: 25px;">【抖音同款】漂浮早餐+高空秋千</p>
              <p slot="content">【印尼秘境】空中花园酒店</p>
            </Panel>
          </Collapse>
        </TabPane>
        <TabPane label="一日游" name="name2">
          <Collapse simple v-model="value2">
            <Panel name="1">
              一日游
              <p slot="content" style="height: 25px;">【蜜月浪漫推荐】2晚莎玛贝（漂浮早餐）</p>
              <p slot="content">【浪漫推荐】全景阳台套房S</p>
            </Panel>
          </Collapse>
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
          value1 : ['1','2','3','4'],
          value2: '1'
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
