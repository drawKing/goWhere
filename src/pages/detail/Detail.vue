<template>
    <div>
        <detail-banner :sightName="sightName" :bannerImg="bannerImg" :bannerImgs="gallaryImgs"></detail-banner>
        <detail-header></detail-header>
        <div class="content">
            <detail-list :list="list" :onedayList="onedayList"></detail-list>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import DetailBanner from './components/Banner'
import DetailHeader from './components/Header'
import DetailList from './components/List'
export default {
    // 做递归组件时用到name;对页面取消缓存时也需要用到name;name是组件的名字
    name:"Detail",
    components: {
        DetailBanner,
        DetailHeader,
        DetailList
    },
    data () {
        return {
            sightName: "",
            bannerImg: "",
            gallaryImgs: [],
            list: [],
            onedayList:[]
        }
    },
    methods: {
        getDetailInfo () {
            axios.get('/api/detail.json', {
                params: {
                    id: this.$route.params.id
                }
            }).then(this.handleGetDataSucc)
        },
        handleGetDataSucc (res) {
            res = res.data
            if(res.ret && res.data){
                const data = res.data
                this.sightName = data.sightName,
                this.bannerImg = data.bannerImg,
                this.gallaryImgs = data.gallaryImgs,
                this.list = data.categoryList,
                this.onedayList = data.onedayList
            }
        }
    },
    mounted () {
        this.getDetailInfo()
    }
}
</script>

<style lang="stylus" scoped>
.content
    height 50rem
</style>
