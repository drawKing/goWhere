<template>
    <div></div>
</template>

<script>
import axios from 'axios'
export default {
    name: "Swiper",
    methods: {
        getSwiperInfo () {
            axios.get('/api/swiper.json', {
                params: {
                    id: this.$route.params.id
                }
            })
        },
        // .then(this.handleSucc)
        // handleSucc (res) {
        //     res = res.data
        //     if(res.ret && res.data){
        //         const data = res.data
        //         this.sightName = data.sightName,
        //         this.bannerImg = data.bannerImg,
        //         this.gallaryImgs = data.gallaryImgs,
        //         this.list = data.categoryList,
        //         this.onedayList = data.onedayList
        //     }
        // }
    },
    // mounted () {
    //     this.getDetailInfo()
    // }
}
</script>

<style lang="stylus" scoped>

</style>
