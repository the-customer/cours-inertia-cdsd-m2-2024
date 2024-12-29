<template>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <img src="https://dl.memuplay.com/new_market/img/com.vicman.newprofilepic.icon.2022-06-07-21-33-07.png" alt="User profile" class="rounded-full w-24 h-24 mx-auto mb-4">
        <h2 class="text-xl font-semibold text-center text-gray-800">{{ user.username }}</h2>
        <p class="text-gray-600 text-center">{{ user.job }}</p>
    </div>
</template>

<script setup>
defineProps({
    user: {
        type: Object,
        required: true,
        default: () => ({username: 'John Doe', job: 'Web Developer'})
    }
})
</script>