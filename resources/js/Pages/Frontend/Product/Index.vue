<template>

    <Head title="Usuários" />

        <FrontendLayout>

            <div v-if="$page.props.flash.message" class="alert bg-green-200 mt-4 mx-5 px-4 py-2">
                {{ $page.props.flash.message}}
            </div>

            <div class="mt-4 mx-4">
                <div class="flex justify-between">
                    <h5> Lista de usuários</h5>
                    <Link :href="route('products.create')" class="bg-blue-500 text-white p-3 rounded mb-4"> Cadastrar Usuário</Link>
                </div>
                <table class="w-full bg-white border border-gray-200 shadow">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 text-left border"> Id</th>
                            <th class="py-2 px-4 text-left border"> Data Cadastro</th>
                            <th class="py-2 px-4 text-left border"> Nome</th>
                            <th class="py-2 px-4 text-left border"> CPF</th>
                            <th class="py-2 px-4 text-left border"> E-mail</th>
                            <th class="py-2 px-4 text-left border"> Perfil</th>
                            <th class="py-2 px-4 text-left border"> Ação </th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr
                            v-for="(item, index) in products" :key="index">
                            <td class="py-2 px-4 border"> {{item.id}}</td>
                            <td class="py-2 px-4 border"> {{item.data_cadastro}}</td>
                            <td class="py-2 px-4 border"> {{ item.nome }}</td>
                            <td class="py-2 px-4 border"> {{ item.cpf }}</td>
                            <td class="py-2 px-4 border"> {{ item.email }}</td>
                            <td class="py-2 px-4 border"> {{ item.perfil }}</td>
                            <td class="py-2 px-4 border"> 
                                <Link :href="route('products.show', item.id)" 
                                class="px-2 oy-1 text-sm bg-blue-300 text-white me-2 rounded inline-block"> 
                                Exibir
                                </Link>

                                <Link :href="route('products.edit', item.id)" 
                                class="px-2 oy-1 text-sm bg-green-500 text-white me-2 rounded inline-block"> 
                                Editar
                                </Link>

                                <button type="submit" 
                                class="px-2 oy-1 text-sm bg-red-500 text-dark me-2 rounded inline-block"
                                @click="deleteProduct(item.id)"> 
                                Apagar
                            </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </FrontendLayout>


</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link, useForm} from '@inertiajs/vue3';

defineProps({
    products:Array,
});

const form = useForm({});

const deleteProduct = (productId) =>{
    if(confirm('Tem certeza que deseja apagar o usuário selecionado?')){
        form.delete(route('products.destroy',productId));
    }
}
</script>