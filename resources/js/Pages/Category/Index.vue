<template>
    <div>
        <h1 class="text-3xl font-bold ml-4 border-b-2">Liste des categories:</h1>
        <div>
            <Link 
                v-for="cat in categories" :key="cat.id"
                :href="`/categories/${cat.slug}`">
                <Box>{{ cat.name }}</Box>
            </Link>
        </div>
        <hr>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
// import Box from "../../Components/Box.vue";
import Box from "@/Components/Box.vue";

defineProps({
    categories: Array
});
</script>
