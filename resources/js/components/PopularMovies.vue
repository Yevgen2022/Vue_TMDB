<template>
    <div>
        <h2>Popular Movies</h2>
        <ul v-if="movies && movies.length">
            <li v-for="movie in movies" :key="movie.id">{{ movie.title }}</li>
        </ul>
        <p v-else>Loading...</p>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
    setup() {
        const movies = ref([]); // створюємо реактивну змінну

        // Виконуємо запит під час монтування компонента
        onMounted(() => {

            // axios.get('https://api.themoviedb.org/3/movie/popular', {
            axios.get('http://localhost:8000/api/movies/popular')
                .then(response => {
                  //  console.log(response);
                    movies.value = response.data.results; // присвоюємо результат до реактивної змінної
                })
                .catch(error => {
                    console.error("Error fetching movies:", error);
                });
        });

        return {
            movies
        };
    }
};
</script>
