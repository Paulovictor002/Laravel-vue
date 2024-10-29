<template>

    <Head title="Exibição de Usuário" />

        <FrontendLayout>

            <div class="mt-4 mx-4">
                <div class="flex justify-between">
                    <h5> Usuário</h5>
                    <Link :href="route('products.index')" class="bg-red-500 text-white py-2 px-5 rounded mb-4 inline-block"> Voltar</Link>
                </div>
                <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6">
                    <div class="mb-3">
                        <label>Nome</label>
                        <p>
                            {{ product.nome }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label> Email</label>
                        <p>
                            {{ product.email }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label> CPF (Somente números)</label>
                        <p>
                            {{ product.cpf }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label> Perfil</label>
                        <p>
                            {{ product.perfil }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label> Data do Cadastro</label>
                        <p>
                            {{ product.data_cadastro }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label> Endereço</label>
                        <p>
                            {{ product.endereco }}
                        </p>
                    </div>
                </div> 
                </div>
            </div>
        </FrontendLayout>

</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link, useForm} from '@inertiajs/vue3';

defineProps({
    errors: Object,
    product: Object,
})



</script>