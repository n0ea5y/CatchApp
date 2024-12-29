<script setup>
import CardLink from '@/Components/CardLink.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import CAButton from '@/Components/CAButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import axios from 'axios';
import { ref } from 'vue';

const storeDetaile = ref({
    'name': '',
    'name_kana': '',
})

 const onClick = () => {
    axios.post(route('admin.store.store'), {
        'name' : storeDetaile.value.name,
        'name_kana' : storeDetaile.value.name_kana,
    }).then(function (res) {
        window.location.href = res.data.redirect;
    }).catch(function (err) {
        console.log(err);
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
                <CAButton @click="onClick">登録</CAButton>
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
