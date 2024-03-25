<template>
    <div class="pp-Container">
        <el-row>
            <el-col :span="leftspan">
                <div class="pp-Container-left-card">
                    <el-card>
                        ddd
                    </el-card>
                </div>
            </el-col>
            <el-col :span="mainspan">
                <div class="pp-Container-main-card" :class="mainspan ===24? 'pp-Container-main-card-only' : ''">
                    <el-card>
                        <div v-for="item in 100" :key="item">
                            {{ item }}
                        </div>
                    </el-card>
                </div>
            </el-col>
        </el-row>
    </div>
</template>

<script setup lang="ts">
import { onMounted, ref, watch } from 'vue';

let leftspan = ref(6)
let mainspan = ref(18)

onMounted(() => {
    window.onresize = () => {
        if (document.documentElement.clientWidth < 960) {
            leftspan.value = 0
            mainspan.value = 24
        } else {
            leftspan.value = 6
            mainspan.value = 18
        }
    }
})

</script>

<style scoped>
.pp-Container-left-card,
.pp-Container-main-card {

    margin: var(--header-margin-bottom);
    margin-top: 0;
}
.pp-Container-main-card-only{
    margin: var(--header-margin-bottom) !important;
}

.pp-Container-main-card {
    margin-left: calc(var(--header-margin-bottom) /2)
}

.pp-Container-left-card {
    margin-right: calc(var(--header-margin-bottom) /2);
    position: sticky;
    top: var(--sticky-top)
}
</style>