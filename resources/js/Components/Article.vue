<template>
    <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center space-x-4 mb-4">
                <img class="w-12 h-12 rounded-full" src="https://dl.memuplay.com/new_market/img/com.vicman.newprofilepic.icon.2022-06-07-21-33-07.png" alt="">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Breukh</h2>
                    <p class="text-sm text-gray-600">Posted 1 hour ago</p>
                </div>
            </div>
            <h3 class="text-gray-900 text-2xl"> Article's title </h3>
            <p class="mb-4 text-gray-700"> {{ article.content }} </p>
            <img class="w-full h-72 object-cover mb-4" :src="article.image" alt="">
            <div class="flex items-center justify-between space-x-2">
                <button class="flex items-center space-x-2">
                    <span>👍</span>
                    <span>Like</span>
                </button>
                <button class="flex items-center space-x-2">
                    <span>💬</span>
                    <span>Comment</span>
                </button>
                <button class="flex items-center space-x-2">
                    <span>↪️</span>
                    <span>Share</span>
                </button>
            </div>
        </div>
</template>

<script setup>
defineProps({
    article: Object
})
</script>