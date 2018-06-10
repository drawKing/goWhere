<template>
    <div>
        <swiperHeader></swiperHeader>
    </div>
</template>

<script>
import axios from 'axios'
import swiperHeader from "./components/SwiperHeader"
export default {
    name: "Swiper",
    components: {
        swiperHeader,
    }
}
</script>

<style lang="stylus" scoped>

</style>
