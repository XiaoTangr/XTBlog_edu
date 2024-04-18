<template>
    <div class="Edit-Continar">
        <el-card>
            <el-form label-width="auto">
                <el-form-item>
                    <div class="Edit-Submit-Continar">
                        <el-button :icon="MessageBox" type="info">暂存</el-button>
                        <el-button :icon="Upload" type="primary">发布</el-button>
                    </div>
                </el-form-item>
                <el-form-item label="标题">
                    <el-input placeholder="请输入标题"></el-input>
                </el-form-item>
                <el-form-item label="摘要">
                    <el-input type="textarea" placeholder="请输入摘要"></el-input>
                </el-form-item>
                <el-form-item>
                    <div id="vditor"></div>
                </el-form-item>
            </el-form>
        </el-card>
    </div>
</template>
<script setup lang="ts">
import { onMounted, ref, watch } from 'vue'
import { useDark } from '@vueuse/core'
import { Upload, MessageBox } from '@element-plus/icons-vue';

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
        width: "100%",
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
.Edit-Continar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    flex: 1;
    margin: 1em;
}

.Edit-Submit-Continar {
    display: flex;
    flex-direction: row;
    justify-content: end;
    align-items: center;
    width: 100%;
}

@media screen and (min-width: 768px) {
    .Edit-Continar {
        width: 70%;
    }
}
</style>