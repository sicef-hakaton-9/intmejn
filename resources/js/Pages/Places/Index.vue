<template>
    <div class="flex flex-col items-center gap-2 p-4">
        <p class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
            Mesta
        </p>
        <Link
            v-for="place in places"
            :key="place.id"
            :href="`/znamenitosti/${place.id}`"
            class="w-full flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-3xl hover:bg-button dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-300 ease-in-out"
        >
            <img
                class="object-cover w-full h-full rounded-t-lg md:h-auto md:w-full max-w-sm md:rounded-none md:rounded-l-lg"
                :src="'images/' + place.image_path"
                :alt="place.name"
            />
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                    {{ place.name }}
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ place.description }}
                </p>
                <p
                    class="font-normal text-gray-400 dark:text-gray-400 flex items-center"
                >
                    <span>
                        <Location class="w-4 h-4 inline-block mr-1" />
                    </span>
                    {{ place.location }}
                </p>
            </div>
        </Link>
    </div>
</template>

<script setup>
import { ref } from "vue";
import Location from "~icons/mdi/location";

defineProps({
    places: {
        type: Array,
        required: true,
    },
});
</script>
