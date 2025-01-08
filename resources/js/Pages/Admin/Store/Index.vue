<script setup>
import CardLink from '@/Components/CardLink.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import CAButton from '@/Components/CAButton.vue';

const props = defineProps({
    stores: Object,
});

</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                店舗管理
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-lg sm:rounded-lg p-6">
                    <div class="w-10/12 mx-auto">
                        <div class="flex text-gray-900 text-end mb-10">
                            <p class="text-xl font-bold">店舗一覧</p>
                            <div class="ml-auto">
                                <Link :href="route('admin.store.create')">
                                <CAButton>店舗追加</CAButton>
                                </Link>
                            </div>
                        </div>

                        <div class="mx-auto">
                            <div class="flex justify-around flex-wrap">
                                <template v-for="store in props.stores">
                                    <div>

                                        <CardLink class="my-10" :url="route('admin.store.show', {'storeId': store.id})">
                                            <p class="text-center">{{ store.name }}</p>
                                            <span v-if="store.store_sale != null">
                                                
                                            月間売標：{{ store.store_sale.sales_amount.toLocaleString() }}円
                                            </span>
                                            <span v-else class="text-red-500">
                                                月売りが未設定です
                                            </span>

                                            <div class="w-full h-[150px] relative overflow-hidden wrap-amaount">
                                                <div class="bg-green-200 w-full absolute bottom-0 animate-wave" :style="{height: store.store_sale ? ((1400000 / store.store_sale.sales_amount) * 150)  + 'px' : 0 + 'px'}">
                                                        売上{{500000}}円
                                                </div>
                                            </div>
                                        </CardLink>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

.wrap-amaount {
    border: dashed 1px rgba(0, 0, 0, .2)
}

</style>