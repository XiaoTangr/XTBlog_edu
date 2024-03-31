<template>
    <div>
        <div class="edit-Continar">
            <div id="vditor"></div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { onMounted, ref, watch } from 'vue'
import { useDark } from '@vueuse/core'
// md编辑器2
import Vditor from 'vditor'
import 'vditor/dist/index.css';

let isDark = useDark();

// 监听主题变化，应用到markdown编辑器
watch(isDark, () => {
    if (isDark.value) {
        vditor.value.setTheme("dark");
    } else {
        vditor.value.setTheme("classic");
    }
})

// markdown编辑器初始化
const vditor = ref()
onMounted(() => {
    vditor.value = new Vditor("vditor", {
        theme: isDark.value === true ? "dark" : "classic",
        lang: "zh_CN",
        mode: "ir",
        cache: {
            "enable": false
        },
        height: "100%",
        width: "80%",
        placeholder: "请输入内容",
        preview: {
            hljs: {
                style: 'github',
                lineNumber: true,
            },
        }
    });
});

</script>

<style scoped>
.edit-Continar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 2em;
    height: 100%;
    flex: 1;
}


</style>