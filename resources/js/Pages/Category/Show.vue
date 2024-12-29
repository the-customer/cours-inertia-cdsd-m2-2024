<template>
    <div>
        <h1>Details Categorie: <Link :href="`/categories/${category.slug}/edit`">Editer</Link> </h1>
        <h4>Nom : </h4>
        <p>
            {{ category.name }}
        </p>
        <h4>Description : </h4>
        <p>
            {{ category.description }}
        </p>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"

defineProps({
    category: Object
})
</script>

<style scoped>
a{
    color: orange;
    text-decoration: none;
    padding: 5px;
    font-size: 1rem;
    border: 1px solid orange;
    border-radius: 5px;
}
a:hover{
    background-color: orange;
    color: white;
}
</style>
