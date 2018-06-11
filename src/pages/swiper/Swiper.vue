<template>
    <div>
        <swiperHeader :list="menuList" :listTwo="recommendList"></swiperHeader>
        <swiper-content :list="swiperContentList"></swiper-content>
    </div>
</template>

<script>
import axios from 'axios'
import swiperHeader from "./components/SwiperHeader"
import SwiperContent from "./components/SwiperContent"
export default {
    name: "Swiper",
    components: {
        swiperHeader,
        SwiperContent
    },
    data () {
      return {
          menuList: [],
          swiperContentList: [],
          recommendList: []
      }
    },
    methods:{
        getHomeInfo () {
            axios.get('/api/swiper.json').then(this.getHomeInfoSucc)
        },
    getHomeInfoSucc (res) {
      res = res.data
      if(res.ret && res.data){
        const data = res.data
        this.menuList = data.menuList
        this.swiperContentList = data.swiperContentList
        this.recommendList = data.recommendList
      }
    }
  },
  mounted () {
    this.getHomeInfo()
  },
}
</script>

<style lang="stylus" scoped>

</style>
