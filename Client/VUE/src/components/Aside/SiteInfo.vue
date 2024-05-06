<template>
    <div>
        <el-card class="SiteInfo-Container">
            <div class="Avatar-Container">
                <el-avatar :src="data.SiteAvatar" size="large" />
                <h2>
                    {{ data.SiteName }}
                </h2>
                <p>
                    {{ data.SiteDesc }}
                </p>
            </div>
            <div class="SocialLinl-Container">
                <SocialIcon link="https://www.baidu.com" icon="./favicon.jpg">
                    <el-icon>
                        <Link />
                    </el-icon>
                </SocialIcon>
            </div>
        </el-card>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import SocialIcon from '../utils/SocialIcon.vue';


const data = ref({
    SiteAvatar: "/favicon.jpg",
    SiteName: "站点名称",
    SiteDesc: "一只小唐的Blog",
})
</script>

<style scoped>
.SiteInfo-Container {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.Avatar-Container{
    display: flex;
    flex-direction: column;
    align-items: center
}
</style>