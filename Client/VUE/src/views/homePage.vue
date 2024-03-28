<template>
    <div class="home-main">
        <RouterLink to="/edit">edit</RouterLink>
        <br>
        <RouterLink to="/post">post</RouterLink>
    </div>

</template>

<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'

</script>

<style scoped>
.home-main{
    height: 100%;
}
</style>