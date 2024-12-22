<template>
    <div>
        <MainLayout>
            <h1>La vue Index</h1>
            {{ noms }}
            <hr>
            <p>{{ info }}</p>
        </MainLayout>
    </div>
</template>

<script setup>
import MainLayout from '../../Layouts/MainLayout.vue';
const props = defineProps(['noms','info']);

// props.info = "indo modifiee";❌

console.log(props.info);

</script>

<style scoped>
    h1{
        color: red;
    }
</style>
