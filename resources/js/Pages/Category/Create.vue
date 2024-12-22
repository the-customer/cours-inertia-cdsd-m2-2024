<template>
    <div>
        <h1>Nouvelle Categorie</h1>
        <form @submit.prevent="onCreate()">
            <label for="name">Nom:</label>
            <input type="text" id="name" v-model="formCat.name" />
            <br>
            <label for="description">Description:</label>
            <textarea id="description" v-model="formCat.description"></textarea>
            <br>
            <button>Enregister</button>
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
    if (formCat.name.trim() == '' || formCat.description.trim() == '') {
        alert('Veuillez remplir tous les champs.');
        return;
    }
    formCat.post('/categories');
};
</script>
