<template>
    <ul class="list">
        <li class="item">A</li>
        <li class="item">A</li>
        <li class="item">A</li>
        <li class="item">A</li>
        <li class="item">A</li>
        <li class="item">A</li>
    </ul>
</template>

<script>
export default {
    name:"CityAlphabet"
}
</script>

<style lang="stylus" scoped>
@import '~styles/varibles.styl';
.list
    display flex
    flex-direction column
    justify-content center
    align-items center
    position fixed
    right 0
    top 1.58rem
    bottom 0
    width .4rem
    color $bgColor
    .item
        line-height .4rem
</style>
