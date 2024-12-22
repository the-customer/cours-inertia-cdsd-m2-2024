<template>
    <div>
        <h1>Liste de dotos</h1>
        <ul>
            <li v-for="todo in todos" :key="todo">{{ todo }}</li>
        </ul>
    </div>
</template>

<script setup>
// defineProps(['todos']);
const props = defineProps({
    todos: {
        type: Array,
        required: true,
        default: () => ['Tache 1', 'Tache 2', 'Tache 3', 'Tache 4']
    },
    // nom: String,
    // age: {
    //     type: Number,
    //     required: true,
    //     default: 30
    // }
});

console.log(props.todos);
</script>
