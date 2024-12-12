<template>
    <div>
        <h2>Popular Movies</h2>
        <ul v-if="movies && movies.length">
            <template v-for="movie in movies" :key="movie.id">
                <li>{{ movie.title }}</li>
                <p>{{ movie.overview }}</p>
            </template>
        </ul>

        <p v-else>Loading...</p>
    </div>
</template>

<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';

const movies = ref([]);


onMounted(async () => {
    try {
        const response = await axios.get('http://localhost:8000/api/movies/popular');
        movies.value = response.data.results;
    } catch (error) {
        console.error("Error fetching movies:", error);
    }
});
</script>

<style scoped>

</style>
