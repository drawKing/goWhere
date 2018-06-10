<template>
    <div>
        <swiperHeader></swiperHeader>
        <swiper-content></swiper-content>
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
    }
}
</script>

<style lang="stylus" scoped>

</style>
