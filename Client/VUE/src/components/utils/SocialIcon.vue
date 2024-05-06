<template>
    <div @click="openLink()">
        <el-tooltip content="Bottom center" placement="bottom" effect="light">

                <solt></solt>

        </el-tooltip>
    </div>

</template>

<script setup lang="ts">

const props = defineProps({
    icon: {
        type: String,
        required: true,
        default: './favicon.jpg'
    },
    link: String,
});

const openLink = () => {
    window.open(props.link, '_blank');
}

</script>

<style scoped></style>