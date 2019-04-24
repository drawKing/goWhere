<template>
    <div class="weekWrap">
        <div class="title">
            <span class="iconfont like">&#xe605;</span>
            <b>周末去哪儿</b>
            <span class="moreAdv">猜你喜欢 ></span>
        </div>
        <Scroll :on-reach-bottom="handleReachBottom">
          <ul>
            <li class="item border-bottom"  v-for="(item,index) of list1" :key="index">
              <div class="item-img-wrapper">
                <img class="item-img" :src="item.imgUrl">
              </div>
              <div class="item-info">
                <p class="item-title">{{item.title}}</p>
                <p class="item-desc">{{item.desc}}</p>
              </div>
            </li>
          </ul>
        </Scroll>
    </div>
</template>

<script>
export default {
    name: "HomeWeekend",
    data () {
      return {
        list1: [
          {
            "id": "0001",
            "imgUrl": "static/mock/img/week1.jpg",
            "title": "南沙弹丸礁丨那不可言说的0.35平方公里",
            "desc": "已经不记得是什么时候知道南沙和西沙这两个无比美丽的地方，在我的认知里面这是两个遥远而不可及的梦，是去不了地方。"
          },{
            "id": "0002",
            "imgUrl": "static/mock/img/week2.jpg",
            "title": "【神雕侠旅】”绝地海岛 湿身战场“——泰国泼水节之旅",
            "desc": "这里有香艳诱人的比基尼大妞、八块腹肌的猛男壮汉、金发碧眼的萌妹鲜肉... "
          },{
            "id": "0003",
            "imgUrl": "static/mock/img/week3.jpg",
            "title": "K3/贝加尔湖 | 坐上火车，去一片冰封的海",
            "desc": "每次旅行，最艰难的就是出发前的准备，说走就走，只是想当然的浪漫"
          },{
            "id": "0004",
            "imgUrl": "static/mock/img/week4.jpg",
            "title": "北大西洋之上，本布尔宾山间，几多惊喜。",
            "desc": "每个人内心对于远方、尽头以及未知的地方总有一种与生俱来的向往"
          }
        ],
        list: [
          {
            "id": "0001",
            "imgUrl": "static/mock/img/week1.jpg",
            "title": "南沙弹丸礁丨那不可言说的0.35平方公里",
            "desc": "已经不记得是什么时候知道南沙和西沙这两个无比美丽的地方，在我的认知里面这是两个遥远而不可及的梦，是去不了地方。"
          },{
            "id": "0002",
            "imgUrl": "static/mock/img/week2.jpg",
            "title": "【神雕侠旅】”绝地海岛 湿身战场“——泰国泼水节之旅",
            "desc": "这里有香艳诱人的比基尼大妞、八块腹肌的猛男壮汉、金发碧眼的萌妹鲜肉... "
          },{
            "id": "0003",
            "imgUrl": "static/mock/img/week3.jpg",
            "title": "K3/贝加尔湖 | 坐上火车，去一片冰封的海",
            "desc": "每次旅行，最艰难的就是出发前的准备，说走就走，只是想当然的浪漫"
          },{
            "id": "0004",
            "imgUrl": "static/mock/img/week4.jpg",
            "title": "北大西洋之上，本布尔宾山间，几多惊喜。",
            "desc": "每个人内心对于远方、尽头以及未知的地方总有一种与生俱来的向往"
          }
        ],
      }
    },
    methods: {
      // 随机打乱数组顺序
      handleGetArrRandomly(arr) {
        const len = arr.length;
        for(let i=len-1;i>=0;i--){
          let randomIndex = Math.floor(Math.random() * (i+1));

          //下面三句相当于把从数组中随机抽取到的值与当前遍历的值互换位置
          let itemIndex = arr[randomIndex];
          arr[randomIndex] = arr[i];
          arr[i] = itemIndex;
        }

        return arr;
      },

      handleReachBottom () {
        return new Promise(resolve => {
          let newList = this.handleGetArrRandomly(this.list);

          setTimeout(() => {
            this.list1 = this.list1.concat(newList);

            resolve();
          }, 2000);
        });
      }
      // handleReachBottom () {
      //   return new Promise(resolve => {
      //     setTimeout(() => {
      //       const last = this.list1[this.list1.length - 1];
      //       for (let i = 1; i < 11; i++) {
      //         this.list1.push(last + i);
      //       }
      //       resolve();
      //     }, 2000);
      //   });
      // },
    },
}
</script>

<style lang="stylus" scoped>
@import '~styles/mixins.styl'
.weekWrap
    background white
    /*padding-bottom 10%*/
    .title
        text-indent .2rem
        margin-top .2rem
        padding-top .3rem
        line-height .5rem
        font-size .3rem
        color #212121
        .like
            color red
            font-size .37rem
        .moreAdv
            float right 
            font-size 12px
            padding-right .5rem
    .item
        margin-top .1rem
        .item-img-wrapper
            height 0
            padding-bottom 37.09%
            overflow hidden 
            .item-img
                width 100%
        .item-info
            padding .1rem 0 .1rem .2rem
            .item-title
                line-height .54rem
                font-size .3rem
                ellipsis()
            .item-desc
                line-height .4rem
                color #cccccc
                ellipsis()
</style>
