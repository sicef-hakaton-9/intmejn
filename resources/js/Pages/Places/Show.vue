<template>
    <div>
        <div
            class="flex flex-col items-center justify-center container mx-auto"
        >
            <div class="flex flex-col items-center justify-center">
                <h1
                    class="my-4 text-4xl font-bold text-center text-gray-900 dark:text-white"
                >
                    {{ place.name }}
                </h1>
                <p class="text-gray-700 dark:text-gray-400">
                    {{ place.place_type.name }}
                </p>
                <a href="#location" class="text-gray-700 dark:text-gray-400">
                    <span>
                        <Location class="w-4 h-4 inline-block mr-1" />
                    </span>
                    {{ place.address }}
                </a>
            </div>
            <img
                :src="'/images/' + place.image_path"
                :alt="place.title"
                class="w-auto h-96 rounded-lg mt-2"
            />
            <p class="p-4 text-gray-700 dark:text-gray-400">
                {{ place.description }}
            </p>
            <div>
                <button
                    type="button"
                    class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                    :class="
                        isFavorite
                            ? 'bg-yellow-400 hover:bg-yellow-600'
                            : 'bg-blue-400 hover:bg-blue-800'
                    "
                    @click="isFavorite = !isFavorite"
                >
                    <StarOutline class="w-4 h-4 mr-1" v-if="!isFavorite" />
                    <Star class="w-4 h-4 mr-1" v-else />
                    Sačuvaj
                </button>
            </div>
            <PlacesGuidesList class="mt-4" />
            <div id="location" class="mt-24 w-full flex flex-col items-center">
                <iframe
                    :src="
                        'https://maps.google.com/maps?q=' +
                        place.latitude +
                        ',' +
                        place.longitude +
                        '&t=&z=15&ie=UTF8&iwloc=&output=embed'
                    "
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import PlacesGuidesList from "@/Components/Places/GuidesList.vue";
import Location from "~icons/mdi/location";
import StarOutline from "~icons/mdi/star-outline";
import Star from "~icons/mdi/star";

defineProps(["place"]);

let isFavorite = ref(false);
</script>
