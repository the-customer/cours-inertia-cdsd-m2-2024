<template>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <form @submit.prevent="submitPost">
            <input v-model="formPost.title" placeholder="Title..."
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-3"
                type="text">

            <textarea v-model="formPost.body"
                class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                rows="4" placeholder="Create an article ..."></textarea>

            <select v-model="formPost.category_id"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-3"
                id="category_id">
                <option v-for="cat in categories" :key="cat.id" :value="cat.id">{{ cat.name }}</option>
            </select>

            <div class="mt-4 flex justify-between">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Publish</button>
                <div class="flex space-x-4">
                    <label for="file-upload" class="text-gray-600 cursor-pointer">
                        Photo/Video
                    </label>
                    <input @change="formPost.image = $event.target.files[0]" class=" hidden" id="file-upload"
                        type="file" />
                </div>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

defineProps({
    categories: Array
});
const formPost = useForm({
    title: '',
    body: '',
    category_id: '',
    image: null
});

const submitPost = () =>{
    formPost.post('/articles',{
        onFinish: () => formPost.reset('title','body','category_id','image')
    });
}
</script>