<template>
    <div class="wrapper">
        <swiper :options="swiperOption" >
            <!-- slides -->
            <swiper-slide v-for="item of swiperList" :key="item.id"><img class="swiper-img" :src="item.imgUrl"></swiper-slide>
            <!-- Optional controls -->
            <div class="swiper-pagination"  slot="pagination"></div>
        </swiper>
    </div>
</template>

<script>
export default {
    name:"HomeSwiper" ,
    data () {
        return{
            swiperOption:{
                pagination: ".swiper-pagination",
                loop:true,
                autoplay: 2000,
            },
            swiperList:[{
                id:"0001",
                imgUrl: "http://img1.qunarzz.com/piao/fusion/1801/bd/04554e7c67650302.jpg_750x200_4293d60a.jpg"
            },{
                id:"0002",
                imgUrl: "http://img1.qunarzz.com/piao/fusion/1804/c4/1cdd28811593b802.jpg_750x200_5fbb7c91.jpg"
            },{
                id:"0003",
                imgUrl: "http://img1.qunarzz.com/piao/fusion/1805/b6/2330c92270c7e802.jpg_750x200_425e2121.jpg"
            }]
        }
    }   
}
</script>

<style lang="stylus" scoped>
// ">>>指样式穿透，这样的话样式就不会受scoped限制了"
.wrapper >>> .swiper-pagination-bullet-active
    background:#fff
.wrapper
    width 100%
    height 0
    overflow hidden
    padding-bottom 26.25%
    .swiper-img
        width 100%
</style>