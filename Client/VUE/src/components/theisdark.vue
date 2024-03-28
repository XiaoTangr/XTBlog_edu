<template>
    <div class="isDarkBtn-Box">
        <el-button dark @click="toggleDark" :type="isDark ? 'primary' : 'info'" :icon="DarkIcon" />
    </div>
</template>

<script setup lang="ts">
import { useDark } from '@vueuse/core'
import { ref, watch } from 'vue';
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
.isDarkBtn-Box {
    margin: 1em;
    align-items: center;
}
</style>