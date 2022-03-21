<template>
    <form @submit.prevent="submit">
        <div>
            Title:
            <input v-model="form.title" type="text" name="title" id="title">
        </div>
        <div>
            Author:
            <input v-model="form.author" type="text" name="author" id="author">
        </div>
        <div>
            <button type="submit" :disabled="form.processing">Submit</button>
        </div>
    </form>
</template>

<script setup lang="ts">
import { useForm } from '@inertiajs/inertia-vue3';

let form = useForm({
    title: '',
    author: '',
});

let submit = () => {
    form.post('/books');
};
</script>
