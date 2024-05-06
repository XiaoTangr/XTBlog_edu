<template>
    <div>
        <IndexHeader />
        <RouterView />
        <IndexFooter />
    </div>
</template>

<script setup lang="ts">
import { RouterView } from 'vue-router'

import IndexFooter from '@/components/Index/Public/IndexFooter.vue';
import IndexHeader from '@/components/Index/Public/IndexHeader.vue';


</script>

<style scoped></style>