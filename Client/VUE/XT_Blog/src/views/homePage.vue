<template>
    <div class="home-main">
        <RouterLink to="/post">About</RouterLink>
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