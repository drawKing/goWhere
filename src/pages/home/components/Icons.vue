<template>
    <div class="icons">
        <swiper :options="swiperOption">
            <swiper-slide v-for="(page,index) of pages" :key="index">
                    <router-link class="icon" tag="div" :to=" '/swiper/' + item.id "  v-for='item of page' :key="item.id" >
                        <div class="icon-img">
                            <img class="icon-img-content" :src="item.imgUrl">
                        </div>
                        <p class="icon-desc">{{item.desc}}</p>
                    </router-link>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script>
export default{
  name: 'HomeIcons',
  props:{
      list:Array
  },
  data () {
      return{
          swiperOption:{
              autoplay:false
          }
      }
  },
  computed : {
      pages () {
          const pages = []
          this.list.forEach( (item,index)=>{
              const page= Math.floor(index/8)
              if(!pages[page]){
                  pages[page]=[]
              }
              pages[page].push(item)
          } )
          return pages
      }
  }
}
</script>

<style lang="stylus" scoped>
@import '~styles/varibles.styl';
@import '~styles/mixins.styl';
.icons >>> .swiper-container
    height 180px
    background white
    .icon
        overflow hidden
        float left
        width 25%
        height 90px
        .icon-desc
            width 100%
            height 45px
            line-height 40px 
            text-align center
            color $darkTextColor
            ellipsis()
        .icon-img
            margin 0 auto
            box-sizing border-box
            padding .1rem 0
            width 55px
            height 55px
            .icon-img-content
                display block
                width 55px
                height 55px
                
</style>
