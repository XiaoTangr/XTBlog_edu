<template>
    <div class="FloatTools-Continer">
        <theIsDark/>

    </div>
</template>

<script setup lang="ts">
import theIsDark from "@/components/theisdark.vue";

</script>

<style scoped>
.FloatTools-Continer{
    z-index: 9999;
    float: left;
    position: fixed;
    right: 2em;
    bottom: 2em;
    background:var(--el-bg-color-overlay);
    box-shadow: var(--el-box-shadow);
    border-radius: var(--el-card-border-radius);
}
</style>