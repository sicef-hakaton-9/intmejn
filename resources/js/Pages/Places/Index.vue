<template>
    <div class="flex flex-col items-center gap-2 p-4">
        <p class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
            Mesta
        </p>
        <div class="flex gap-2">
            <Link
                href="/mesta?tip=5"
                class="flex flex-col items-center justify-center w-40 h-40 p-6 bg-white border border-gray-200 rounded-lg transition duration-300 ease-in-out hover:bg-button"
            >
                <CityHall class="w-16 h-16" />
                <p class="text-xl font-semibold text-gray-900 dark:text-white">
                    Znamenitosti
                </p>
            </Link>
            <Link
                href="/mesta?tip=2"
                class="flex flex-col items-center justify-center w-40 h-40 p-6 bg-white border border-gray-200 rounded-lg transition duration-300 ease-in-out hover:bg-button"
            >
                <RestaurantOutline class="w-16 h-16" />
                <p class="text-xl font-semibold text-gray-900 dark:text-white">
                    Restorani
                </p>
            </Link>
            <Link
                href="/mesta?tip=4"
                class="flex flex-col items-center justify-center w-40 h-40 p-6 bg-white border border-gray-200 rounded-lg transition duration-300 ease-in-out hover:bg-button"
            >
                <Store class="w-16 h-16" />
                <p class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tržni centri
                </p>
            </Link>
        </div>
        <Link
            v-for="place in places"
            :key="place.id"
            :href="`/mesta/${place.id}`"
            class="p-2 w-full flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-3xl hover:bg-button dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-300 ease-in-out"
        >
            <img
                class="object-cover w-full h-full rounded-lg md:h-full md:w-52 max-w-sm"
                :src="'images/' + place.image_path"
                :alt="place.name"
            />
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                    class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                    {{ place.name }}
                </h5>
                <p
                    class="font-normal text-gray-400 dark:text-gray-400 flex items-center"
                >
                    {{ place.place_type.name }}
                </p>
                <p
                    class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3"
                >
                    {{ place.description }}
                </p>
                <p
                    class="font-normal text-gray-400 dark:text-gray-400 flex items-center"
                >
                    <span>
                        <Location class="w-4 h-4 inline-block mr-1" />
                    </span>
                    {{ place.address }}
                </p>
            </div>
        </Link>
    </div>
</template>

<script setup>
import { ref } from "vue";
import Location from "~icons/mdi/location";
import CityHall from "~icons/map/city-hall";
import RestaurantOutline from "~icons/ion/restaurant-outline";
import Store from "~icons/material-symbols/store";

defineProps({
    places: {
        type: Array,
        required: true,
    },
});
</script>
