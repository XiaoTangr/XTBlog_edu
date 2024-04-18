<template>
    <div class="home-main">
        <RouterLink to="/edit">edit</RouterLink>
        <br>
        <RouterLink to="/post">post</RouterLink>



        <div class="infinite-list-wrapper" style="overflow: auto">
            <ul v-infinite-scroll="load" class="list" :infinite-scroll-disabled="disabled">
                <li v-for="i in count" :key="i" class="list-item">{{ i }}</li>
            </ul>
            <p v-if="loading">Loading...</p>
            <p v-if="noMore">No more</p>
        </div>
    </div>

</template>

<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import axios from 'axios';
import { computed, onMounted, ref } from 'vue'




onMounted(() => {

    try {
        const response = axios.post('/api/getpostcount');

        console.log(response)
        return response;
    } catch (error) {
        // 处理错误
        console.error('Error fetching data:', error);
        throw error;
    }

})




const count = ref(10)
const loading = ref(false)
const noMore = computed(() => count.value >= 20)
const disabled = computed(() => loading.value || noMore.value)
const load = () => {
    loading.value = true
    setTimeout(() => {
        count.value += 2
        loading.value = false
    }, 2000)
}




</script>

<style scoped>
.home-main {
    height: 100%;
}



.infinite-list-wrapper {
    height: 300px;
    text-align: center;
}

.infinite-list-wrapper .list {
    padding: 0;
    margin: 0;
    list-style: none;
}

.infinite-list-wrapper .list-item {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50px;
    background: var(--el-color-danger-light-9);
    color: var(--el-color-danger);
}

.infinite-list-wrapper .list-item+.list-item {
    margin-top: 10px;
}
</style>