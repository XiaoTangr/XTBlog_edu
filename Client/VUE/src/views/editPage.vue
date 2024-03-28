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

const value = ref('### 三级标题')
watch(value, (newValue, oldValue) => {
    console.log(newValue, oldValue);
})
let isDark = useDark();
const vditor = ref()

watch(isDark, () => {

    if (isDark.value) {
        vditor.value.setTheme("dark");
    } else {
        vditor.value.setTheme("classic");
    }
})

onMounted(() => {
    vditor.value = new Vditor("vditor", {
        height: "100%",
        width: "80%",
        placeholder: "请输入内容",
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

.vditor-reset {
    color: none !important;

}
</style>