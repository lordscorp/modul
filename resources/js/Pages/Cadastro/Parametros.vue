<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue';

const form = ref({
    nome: '',
    descricao: '',
    tipo_id: ''
})

const tipos = ref([])

const fetchTipos = async () => {
    try {
        const response = await axios.get('/api/parametro-tipos')
        tipos.value = response.data
    } catch (error) {
        console.error('Erro ao buscar tipos:', error)
    }
}

const submit = async () => {
    try {
        await axios.post('/api/parametros', form.value)
        alert('Parâmetro cadastrado com sucesso!')
        form.value = { nome: '', descricao: '', tipo_id: '' }
    } catch (error) {
        console.error('Erro ao cadastrar parâmetro:', error)
    }
}

onMounted(fetchTipos)
</script>

<template>

    <Head title="Parâmetros" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Parâmetros
            </h2>
        </template>
        <div class="max-w-xl mx-auto mt-10">
            <h1 class="text-2xl font-bold mb-4">Cadastrar Parâmetro</h1>

            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nome</label>
                    <input v-model="form.nome" type="text" class="mt-1 block w-full border rounded p-2" required />
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Descrição</label>
                    <textarea v-model="form.descricao" class="mt-1 block w-full border rounded p-2" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tipo</label>
                    <select v-model="form.tipo_id" class="mt-1 block w-full border rounded p-2" required>
                        <option value="" disabled>Selecione um tipo</option>
                        <option v-for="tipo in tipos" :key="tipo.id" :value="tipo.id">
                            {{ tipo.nome }}
                        </option>
                    </select>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Salvar
                </button>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
