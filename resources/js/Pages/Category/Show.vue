<template>
    <div class="w-full">
        <div>
            <span>Details Categorie: </span>
            <Link class="link" :href="route('categories.edit',category.slug)">
                Editer
            </Link> 
            <Link 
                as="button"
                method="delete"
                class="danger link" 
                :href="route('categories.destroy',category.slug)">Supprimer</Link> 
        </div>
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
.link{
    color: orange;
    text-decoration: none;
    padding: 5px;
    font-size: 1rem;
    border: 1px solid orange;
    border-radius: 5px;
    margin-right: 5px;
}
.link:hover{
    background-color: orange;
    color: white;
}
.danger{
    color: red;
    border: 1px solid red;
}
.danger:hover{
    background-color: red;
    color: white;
}
</style>
