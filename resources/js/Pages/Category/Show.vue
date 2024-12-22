<template>
    <div>
        <h1>Details Categorie:</h1>
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
defineProps({
    category: Object
})
</script>
