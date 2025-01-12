<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import CAButton from '@/Components/CAButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import { ref } from 'vue';
import { formPost } from '@/Tool/Form';
const storeDetaile = ref({
    'name': '',
    'name_kana': '',
})

 const onClick = () => {
    formPost(route('admin.store.store'), storeDetaile.value, '登録', true, (res) => {
        if(res && res.redirect) {
            window.location.href = res.redirect;
        }
    })
 }
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                店舗追加
            </h2>
        </template>

        <div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg p-6">
                <div class="flex gap-5 mb-10">
                    <div class="">
                        <InputLabel for="store-name">店舗名</InputLabel>
                        <TextInput id="store-name" v-model="storeDetaile.name"></TextInput>
                    </div>
                    <div class="">
                        <InputLabel for="store-name_kana">店舗名カナ</InputLabel>
                        <TextInput id="store-name_kanea" v-model="storeDetaile.name_kana"></TextInput>
                    </div>
                </div>
                <CAButton type="insert" class="mr-10" @click="onClick">登録</CAButton>
                <Link :href="route('admin.store.index')">
                    <CAButton>戻る</CAButton>
                </Link>
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
