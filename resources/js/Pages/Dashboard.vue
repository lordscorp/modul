<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue';

const teste = reactive({
    msg: "Teste",
    num: 0
});

function calculoTeste() {
    teste.num = 2+3;
    teste.msg = "Pronto";
}
</script>

<template>
    <Head title="Painel" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Painel
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div v-if="false" class="p-6 text-gray-900">
                        {{teste.msg}}
                        resul: {{ teste.num }}
                        <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2" @click="calculoTeste">Testar</button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
