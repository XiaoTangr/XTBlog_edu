<template>
  <FloatBar />
  <AppHeader :SiteTitle=SiteData.siteName :PageTitle=SiteData.siteSubTitle />
  <RouterView />
  <AppFooter />
</template>
<script setup lang="ts">
// 组件导入
import AppHeader from '@/components/pagePartial/AppHeader.vue';
import AppFooter from '@/components/pagePartial/AppFooter.vue';
import FloatBar from '@/components/utils/FloatBar.vue';

import { RouterView } from 'vue-router'
import { onBeforeMount } from 'vue';

import { useSiteData } from '@/stores/index';
import router from "./router";

import axios from 'axios';

const SiteData = useSiteData();
onBeforeMount(() => {
  // 初始化时获取当前图标名称
  var currentIcon = SiteData.siteFavicon;

  // 修改或者创建站点图标标签
  var link: any = document.querySelector("link[rel*='icon']") || document.createElement('link');
  link.type = 'image/x-icon';
  link.rel = 'shortcut icon';
  link.href = currentIcon;

  router.beforeEach(async (to, from) => {
    if (to.path === '/edit') {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/login',
          { passwd: 123456 });
        // 假设 API 返回一个成功的状态码，你可以根据实际情况来判断成功与否
        if (response.data.code == 200) {
          console.log('登录成功');
          return true;

        } else {
          return "/"
        }
      } catch (err) {
        console.log(err);
      }
    }
    if (to.path === '/Admin') {
      return "/"
    }
  })
})




</script>

<style scoped></style>