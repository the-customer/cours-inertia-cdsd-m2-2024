<template>
    <div>
        <h1>Editer une Categorie</h1>
        <form @submit.prevent="onEdit()">
            <label for="name">Nom:</label>
            <input type="text" id="name" v-model="formEdit.name" />
            <div v-if="formEdit.errors.name">
                <small>{{ formEdit.errors.name }}</small>
            </div>
            <br>
            <label for="description">Description:</label>
            <textarea id="description" cols="50" rows="5" v-model="formEdit.description"></textarea>
            <div v-if="formEdit.errors.description">
                <small>{{formEdit.errors.description}}</small>
            </div>
            <br>
            <button>Editer</button>
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    category: Object
});

const formEdit = useForm({
    name: props.category.name,
    description: props.category.description
});

const onEdit = () => {
    // formEdit.put(`/categories/${props.category.slug}`);
    formEdit.put(route('categories.update', props.category.slug));
    // formEdit.put(route('categories.update', {category: props.category.slug}));
    // formEdit.put(route('categories.update', [props.category.slug]));
}
</script>

<style scoped>
small{
    color: red;
}
</style>
