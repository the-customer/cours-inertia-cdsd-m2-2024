<template>
    <div>
        <h1>La vue Index</h1>
        {{ noms }}
        <hr>
        <p>{{ info }}</p>
    </div>
</template>

<script setup>
const props = defineProps(['noms','info']);

// props.info = "indo modifiee";❌

console.log(props.info);

</script>


<style scoped>
    h1{
        color: red;
    }
</style>


