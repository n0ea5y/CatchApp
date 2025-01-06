<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import CAButton from '@/Components/CAButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import { ref } from 'vue';
import { formPost } from '@/Tool/Form';

const props = defineProps({
    storeId: String,
});

const storeDetaile = ref({
    store_id: props.storeId,
    sales_amount: '',
    date: new Date,
})

 const onClick = () => {
    formPost(route('admin.store.show.post'), storeDetaile.value, '登録', false, (res) => {
        console.log(res);
    });
 }
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
            店舗詳細
            </h2>
        </template>

        <div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg p-6">
                <div class="flex gap-5 mb-10">
                    <InputLabel for="month" value="月売"></InputLabel>
                    <TextInput id="month" v-model="storeDetaile.sales_amount"></TextInput>
                </div>
                <CAButton @click="onClick">登録</CAButton>
            </div>
        </div>
    </AuthenticatedLayout>
</template>