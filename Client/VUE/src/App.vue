<template>
  <theHeader :SiteTitle=SiteData.siteName :PageTitle=SiteData.siteSubTitle />
  <div class="App-main-container">
    <RouterView />
  </div>
  <theFooter />
  <theTools />
</template>
<script setup lang="ts">
// 组件导入
import theHeader from "@/components/theheader.vue";
import theFooter from '@/components/thefooter.vue';

import { RouterLink, RouterView } from 'vue-router'
import { onBeforeMount, onMounted, ref } from 'vue';
import theTools from "@/components/thefloattools.vue";
import { useSiteData } from '@/stores/index';
import router from "./router";

const SiteData = useSiteData();
onBeforeMount(() => {
  // 初始化时获取当前图标名称
  var currentIcon = SiteData.siteFavicon;

  // 修改或者创建站点图标标签
  var link: any = document.querySelector("link[rel*='icon']") || document.createElement('link');
  link.type = 'image/x-icon';
  link.rel = 'shortcut icon';
  link.href = currentIcon;
})
</script>

<style scoped></style>