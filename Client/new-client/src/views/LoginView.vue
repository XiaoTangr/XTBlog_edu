<template>
    <div class="login-container">
        <LoginImg />
        <LoginForm />
    </div>
</template>

<script setup lang="ts">
import LoginForm from '@/components/Login/LoginForm.vue';
import LoginImg from '@/components/Login/LoginImg.vue';
</script>

<style scoped>
.login-container{
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>