<template>
    <div>
        <nav class="bg-gradient-to-r 
            from-blue-600 
            to-indigo-700
            text-white
            fixed w-full
            top-0 left-0 z-50 shadow-lg">
           <div class="container mx-auto flex justify-between items-center p-4">
            <div>
                <Link class="text-3xl font-bold" :href="route('home.index')">CD.SD</Link>
            </div>
            <div class="flex space-x-6">
                <Link class="lien" :href="route('home.index')">Home</Link>
                <Link class="lien" :href="route('categories.index')">Categories</Link>
                <Link class="lien" :href="'#'">Articles</Link>
                <Link class="text-red-500 font-bold" :href="'#'"> Logout</Link>
            </div>
           </div>
        </nav>
        
        <main class="pt-20 container mx-auto flex space-x-4 px-4 py-12">
            <!-- <p class="alert-success" v-if="page.props.flash.success">
                {{ page.props.flash.success }}
            </p> -->
            <aside class="w-1/4 space-y-6">
                <Profile :user="currentUser"/>
                <Categories :catLinks="catMenuItems"/>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Articles</h3>
                    <ul class="mt-4 space-y-2">
                        <li>
                            <img class="w-20 h-20 rounded-lg" src="https://images.seneweb.com/dynamic/modules/news/images/gen/fb/0023b67dd796dfc8c5b2264eba2e615410e11dba.png" alt="">
                            <span class="text-gray-700 text-sm">Haute Cour de justice : Macky Sall peut-il réellement être poursuivi pour haute trahison ?</span>
                        </li>
                        <li>
                            <img class="w-20 h-20 rounded-lg" src="https://images.seneweb.com/dynamic/modules/news/images/gen/fb/7d4f4aa86ff309e760d7138c828f01b4955ee816.jpg" alt="">
                            <span class="text-gray-700 text-sm">La question ironique de Pape Djibril Fall à Ousmane Sonko...</span>
                        </li>
                    </ul>
                </div>
            </aside>
            <section class="w-3/4 space-y-8">
                <slot></slot>
            </section>
        </main>
    </div>
</template>




<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref } from "vue";
import Profile from "./Components/Profile.vue";
import Categories from "./Components/Categories.vue";

const page = usePage();
const currentUser = {
    username: 'Breukh',
    job: 'Fullstack Developer'
};

const catMenuItems = [
    {name: 'All', link: 'categories.index',slug: ''},
    {name: 'Web', link: 'categories.show', slug: 'web'},
    {name: 'Mobile', link: 'categories.show', slug: 'mobile'},
    {name: 'Desktop', link: 'categories.show', slug: 'desktop'},
    {name: 'Game', link: 'categories.show', slug: 'game'},
];

</script>


