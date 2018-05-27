<template>
    <div>
        <city-header></city-header>
        <city-search></city-search>
        <city-alphabet></city-alphabet>
        <city-list></city-list>
    </div>
</template>

<script>
import CityHeader from './components/Header.vue'
import CitySearch from './components/Search.vue'
import CityAlphabet from './components/Alphabet.vue'
import CityList from './components/List.vue'
export default {
    name:"City",
    components :{
        CityHeader,
        CitySearch,
        CityAlphabet,
        CityList
    }
}
</script>

<style lang="stylus" scoped>

</style>
