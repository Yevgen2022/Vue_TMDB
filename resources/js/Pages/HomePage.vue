
<template>
    <div>
        <h1>{{ t('title.Home') }}</h1>

        <PopularMovies></PopularMovies>
    </div>
</template>

<script setup>
import PopularMovies from "../components/PopularMovies.vue";

import { useI18n } from "vue-i18n";
const { t } = useI18n({useScope: 'global'})

</script>

<style scoped>

</style>
