<template>

    <Head title="Edição de Usuários" />

        <FrontendLayout>

            <div v-if="$page.props.flash.message" class="alert">
                {{ $page.props.flash.message}}
            </div>
            <div class="mt-4 mx-4">
                <div class="flex justify-between">
                    <h5> Editar Usuário</h5>
                    <Link :href="route('products.index')" class="bg-red-500 text-white py-2 px-5 rounded mb-4 inline-block"> Voltar</Link>
                </div>
                <form @submit.prevent="updateProduct()">
                <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6">
                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" v-model="form.nome" class="py-1 w-full"/>
                        <div v-if="errors.nome" class="text-red-500">{{ errors.nome }}</div>
                    </div>
                    <div class="mb-3">
                        <label> Email</label>
                        <input type="text" v-model="form.email" class="py-1 w-full"/>
                        <div v-if="errors.email" class="text-red-500">{{ errors.email }}</div>
                    </div>
                    <div class="mb-3">
                        <label> CPF (Somente números)</label>
                        <input type="text" v-model="form.cpf" class="py-1 w-full"/>
                        <div v-if="errors.cpf" class="text-red-500">{{ errors.cpf }}</div>
                    </div>
                    <div class="mb-3">
                        <label> Perfil</label>
                        <input type="text" v-model="form.perfil" class="py-1 w-full"/>
                        <div v-if="errors.perfil" class="text-red-500">{{ errors.perfil }}</div>
                    </div>
                    <div class="mb-3">
                        <label> Data do Cadastro</label>
                        <input type="text" v-model="form.data_cadastro" class="py-1 w-full"/>
                        <div v-if="errors.data_cadastro" class="text-red-500">{{ errors.data_cadastro }}</div>
                    </div>
                    <div class="mb-3">
                        <label> Endereço</label>
                        <input type="text" v-model="form.endereco" class="py-1 w-full"/>
                        <div v-if="errors.endereco" class="text-red-500">{{ errors.endereco }}</div>
                    </div>
                    <div class="mb-3">
                        <Link :href="route('products.index')" 
                        class="bg-red-500 text-white py-2 px-5 rounded mb-4 inline-block">
                         Voltar
                        </Link>
                        <button type="submit":disabled="form.processing"
                    class="bg-blue-500 text-white py-2 px-5 rounded mb-4">
                    <span v-if="form.processing">Atualizando...</span>
                    <span v-else>Atualizar</span>
                        </button>
                    </div>
                </div> 
                </div>
            </form>
            </div>
        </FrontendLayout>

</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link, useForm} from '@inertiajs/vue3';

const props = defineProps({
    errors: Object,
    product: Object,
})

const form = useForm({
    nome:props.product.nome,
    email:props.product.email,
    cpf:props.product.cpf,
    perfil:props.product.perfil,
    data_cadastro:props.product.data_cadastro,
    endereco:props.product.endereco,
});
const updateProduct = () => {

const res = form.put(route('products.update', props.product.id));
if(res){
    form.reset();
}
}
</script>