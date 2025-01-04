<script setup>
import { successToast } from '@/Tool/Toast';
import { usePage } from '@inertiajs/vue3';

const url = new URL(usePage().url, window.location.origin);
const message = url.searchParams.get('message'); // "message" パラメータを取得
    console.log(url);

if (message) {
    successToast(message); // ここで successToast を使用
    setTimeout(() => {
        url.searchParams.delete('message');
        window.history.replaceState({}, '', url.toString());
    }, 1000);

    console.log(url);
}
</script>

<template>

</template>
