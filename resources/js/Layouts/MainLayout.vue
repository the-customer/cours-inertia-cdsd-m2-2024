<template>
    <div>
        <div class="nav">
            <Link class="lien" href="/">Page Index</Link>
            <br>
            <Link class="lien" href="/show">Page Show</Link>
            <br>
            <Link class="lien" href="/categories">Liste des Categories</Link>
            <br>
            <Link class="lien" href="/categories/create">Nouvelle Categorie</Link>
            <br>
            <h1>Vous venez de passer <code>{{ cpt }}s</code> dans l'application</h1>
            <br>
        </div>
        <p class="alert-success" v-if="page.props.flash.success">
            {{ page.props.flash.success }}
        </p>
        <slot></slot>
    </div>
</template>




<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const page = usePage();

// const nom = "Tata";
// const nom = ref("Tata");
// setTimeout(() => {
//     alert("Modification")
//     nom.value = "Toto";
// }, 5000);

let cpt = ref(0);
setInterval(() => {
    cpt.value++;
},1000);

</script>



<style scoped>
.nav{
    text-align: center;
    margin-bottom: 10px;
    padding: 20px;
    background-color: #c67777;
    color: aliceblue;
}
.lien{
    color: white;
    text-decoration: none;
    padding: 10px;
}
code{
    background-color: rgb(237, 0, 0);
    padding: 5px;
}
.alert-success{
    color: green;
    margin-top: 10px;
    padding: 10px;
    border-radius: 5px;
    background: rgb(197, 253, 197);
}
</style>
