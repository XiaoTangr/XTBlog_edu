<template>
    <div class="isDarkBtn-Box">
        <el-button @click="toggleDark" type="primary" :icon="DarkIcon" />
    </div>
</template>

<script setup lang="ts">
import { useDark, useToggle } from '@vueuse/core'
import { onMounted, ref, watch } from 'vue';
import { PartlyCloudy, MoonNight } from '@element-plus/icons-vue'
const isDark = useDark();
const DarkIcon = ref(isDark.value ? "MoonNight" : "PartlyCloudy")
const toggleDark = () => {
    isDark.value = !isDark.value
}
watch(isDark, () => {
    if (isDark.value) {
        DarkIcon.value = "MoonNight"
    } else {
        DarkIcon.value = "PartlyCloudy"
    }
})

</script>

<style scoped>
.isDarkBtn-Box{
    align-items: center;
}
</style>