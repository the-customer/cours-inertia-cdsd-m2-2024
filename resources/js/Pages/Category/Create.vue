<template>
    <div class="w-full">
        <h1 class="text-2xl font-bold mb-4">Nouvelle Categorie</h1>
        <form @submit.prevent="onCreate()" class="w-full">
            <div class="flex flex-col gap-4">
                <label class="text-gray-700 font-bold" for="name">Nom:</label>
                <input class="border-2 border-black p-2 rounded-md outline-none focus:ring-0 focus:border-blue-800" type="text" id="name" v-model="formCat.name" />
                <div v-if="formCat.errors.name">
                    <small>{{ formCat.errors.name }}</small>
                </div>
            </div>
            
            <div class="flex flex-col gap-4">
                <label class="text-gray-700 font-bold" for="description">Description:</label>
                <textarea class="border-2 border-black p-2 rounded-md outline-none focus:ring-0 focus:border-blue-800" id="description" v-model="formCat.description" cols="50" rows="5"></textarea>
                <div v-if="formCat.errors.description">
                    <small>{{formCat.errors.description}}</small>
                </div>
            </div>
            
            <button class="bg-blue-500 hover:bg-blue-700 text-white mt-2 border-gray-600 border rounded-lg p-2">Enregister</button>
            <!-- <button
                @click="onCreate()"
                type="button"
            >Enregister
            </button> -->
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";


const formCat = useForm({
    name: '',
    description: ''
});


const onCreate = () => {
    formCat.post(route('categories.store'));
};
</script>

<style scoped>
small{
    color: red;
}
</style>
