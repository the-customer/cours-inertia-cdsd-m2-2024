<template>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-center text-blue-600">Categories</h2>
        <ul class="space-y-3 mt-4 text-gray-600">
            <li v-for="cat in catLinks" :key="cat.id">
                <Link :href="route(cat.link,cat.slug)">{{ cat.name }}</Link>
            </li>
        </ul>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    catLinks: {
        type: Array,
        required: true,
        default: () => []
    }
})
</script>