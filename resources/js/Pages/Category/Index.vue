<template>
    <div>
        <h1>Liste des categories:</h1>
        <ul>
            <li v-for="cat in categories" :key="cat.id">
                <Link :href="`/categories/${cat.id}`">
                    {{ cat.name }}
                </Link>
            </li>
        </ul>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    categories: Array
});
</script>
