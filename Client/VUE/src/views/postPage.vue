<template>
    <div class="pp-Container">
        <el-row>
            <el-col class="pp-Container-left" :span="screendata.leftspan">
                <div class="pp-Container-left-card">
                    <el-card>是是是
                    </el-card>
                </div>
            </el-col>
            <el-col :span="screendata.mainspan">
                <div class="pp-Container-main-card"
                    :class="screendata.mainspan === 24 ? 'pp-Container-main-card-only' : ''">
                    <el-card>
                        <div>
                            <MDRender :markdown="MDfile" />

                        </div>
                    </el-card>
                </div>
            </el-col>
        </el-row>
    </div>
</template>

<script setup lang="ts">
import { onMounted, ref } from 'vue';
import MDRender from '@/components/themdrender.vue';

//! 导入markdown文件，用于测试
import MDfile from '@/assets/README.md?raw';

// 媒体查询实现响应式布局
let screendata = ref({
    windowWidth: 0,
    leftspan: 6,
    mainspan: 18,
})
/**
 * 更新屏幕宽度数据
 * @param Width 屏幕宽度
 */
const ChangeWidth = (Width: number) => {
    if (Width < 960) {
        screendata.value.leftspan = 0
        screendata.value.mainspan = 24
    } else {
        screendata.value.leftspan = 6
        screendata.value.mainspan = 18
    }
}

onMounted(() => {
    // 初始化屏幕宽度数据
    screendata.value.windowWidth = document.documentElement.clientWidth;
    ChangeWidth(screendata.value.windowWidth)
    // 监听屏幕宽度变化
    window.onresize = () => {
        screendata.value.windowWidth = document.documentElement.clientWidth;
        ChangeWidth(screendata.value.windowWidth)
    }
})

</script>

<style scoped>
.pp-Container-left-card,
.pp-Container-main-card {

    margin: var(--header-margin-bottom);
    margin-top: 0;
}

.pp-Container-main-card-only {
    margin: var(--header-margin-bottom) !important;
}

.pp-Container-main-card {
    margin-left: calc(var(--header-margin-bottom) /2)
}

.pp-Container-left-card {
    margin-right: calc(var(--header-margin-bottom) /2);
    position: sticky;
    top: var(--Header-sticky-top)
}
</style>