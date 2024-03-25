<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import { ref } from 'vue';
import theHeader from "@/components/parts/theHeader.vue";
import theFooter from '@/components/parts/theFooter.vue';

</script>

<template>
  <theHeader />
    <div class="App-main-container">
      <RouterView />
    </div>
  <theFooter />
</template>

<style scoped>

</style>