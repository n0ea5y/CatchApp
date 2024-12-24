<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    url: String,
});
</script>

<template>
    <Link :href="url">
    <div class="w-[300px] rounded-md border-2 border-neutral-200 p-6 shadow-lg hover:shadow-2xl card">
        <p class="font-bold"><slot></slot></p>
        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403"
            alt="content">
    </div>
    </Link>
</template>