<script setup>
import CardLink from '@/Components/CardLink.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                店舗追加
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-lg sm:rounded-lg p-6">
                    <div class="w-10/12 mx-auto">
                        <div class="flex text-gray-900 text-end mb-10">
                            <p class="text-xl font-bold">店舗一覧</p>
                            <PrimaryButton class="ml-auto">店舗追加</PrimaryButton>
                        </div>

                        <div class="mx-auto">
                            <div class="flex bg-red-100 justify-between">
                                <!-- <template v-for="store in props.stores" :key="store.id"> -->
                                    <!-- <CardLink :url="route('admin.store.index', {'id': store.id})"> {{ store.name }}</CardLink> -->
                                <!-- </template> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
.card {
    transition: all 0.2s;
}

.card:hover {
    scale: 1.02;
}
</style>
