<template>
    <div class="header-Container">
        <el-row>
            <el-col :span="18">
                <div class="header-main">
                    dddd
                </div>
            </el-col>
            <el-col :span="6">
                <div class="header-InfosBox">
                    ddddeee
                    <theIsDark />
                </div>
            </el-col>
        </el-row>
    </div>

</template>

<script setup lang="ts">
import theIsDark from "@/components/theIsDark.vue";
import { useUserData } from "@/stores/stores";

const userData = useUserData();


</script>

<style scoped>
.header-Container {
    z-index: 10;
    background: var(--el-bg-color-overlay);
    z-index: 9;
    position: sticky;
    top: 0;
    box-shadow: var(--el-box-shadow);
    justify-content: center;
    align-items: center;
    height: var(--header-height);
    margin-bottom: var(--header-margin-bottom);
}

.header-main,
.header-InfosBox {
    padding: 1em;
    height: var(--header-height);
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
</style>