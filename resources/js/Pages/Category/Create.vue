<template>
    <div class="w-full">
        <h1>Nouvelle Categorie</h1>
        <form @submit.prevent="onCreate()">
            <label for="name">Nom:</label>
            <input type="text" id="name" v-model="formCat.name" />
            <div v-if="formCat.errors.name">
                <small>{{ formCat.errors.name }}</small>
            </div>
            <br>
            <label for="description">Description:</label>
            <textarea id="description" v-model="formCat.description" cols="50" rows="5"></textarea>
            <div v-if="formCat.errors.description">
                <small>{{formCat.errors.description}}</small>
            </div>
            <br>
            <button class=" border-gray-600 border rounded-lg p-2">Enregister</button>
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
