<template>
    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

        <div class="ml-4 relative">
            <select v-model="selectedLanguage"
                    class="block bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="en">English</option>
                <option value="uk">Українська</option>
                <option value="no">Norwegian</option>
                <option value="pl">Polish</option>
                <option value="ru">Русский</option>
            </select>
        </div>

    </div>
</template>

<script setup>
import {ref} from "vue";


const selectedLanguage = ref("en");





</script>










<style scoped>
/* Стилі для компонента */
select {
    width: auto; /* Ширина залежатиме від вмісту */
    padding: 0.5rem;
    font-size: 1rem;
    background-color: #2d3748; /* Темний фон */
    color: white;
    border: 1px solid #4a5568; /* Світліший контур */
    border-radius: 0.375rem; /* Округлі кути */
}

select:focus {
    outline: none;
    border-color: #3182ce; /* Синій колір при фокусі */
    background-color: #1a202c; /* Темніший фон */
}
</style>
