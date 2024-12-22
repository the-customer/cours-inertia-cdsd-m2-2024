<template>
    <div>
        <div class="nav">
            <Link class="lien" href="/">Page Index</Link>
            <br>
            <Link class="lien" href="/show">Page Show</Link>
            <br>
            <br>
        </div>
        <slot></slot>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
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
</style>
