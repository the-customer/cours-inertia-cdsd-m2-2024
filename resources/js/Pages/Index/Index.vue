<template>
    <div class="space-y-8">
        <Post :categories="categories" />
        <Article v-for="article in articles" :key="article.title" :article="article"/>
    </div>
</template>

<script setup>
import Post from "@/Components/Post.vue";
import Article from "@/Components/Article.vue";

defineProps({
    categories : Array,
    articles: Array
})

// const articles = [
//     {
//         title: "Article 1",
//         content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et luctus enim lorem sit amet dolor. Vestibulum nec velit ante. Praesent placerat risus quis eros.",
//         image: "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",

//     },
//     {
//         title: "Article 1",
//         content: "que. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et luctus enim lorem sit amet dolor. Vestibulum nec velit ante. Praesent placerat risus quis eros.",
//         image: "https://www.efrei.fr/wp-content/uploads/2022/01/Vignette-Tuile-dev-fullstack-scaled.jpg",
//     },
//     {
//         title: "Article 1",
//         content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et luctus enim lorem sit amet dolor. Vestibulum nec velit ante. Praesent placerat risus quis eros.",
//         image: "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
//     },
    
// ];

</script>

