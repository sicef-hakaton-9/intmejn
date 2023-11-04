<template>
    <div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center">
                <h1
                    class="my-4 text-4xl font-bold text-center text-gray-900 dark:text-white"
                >
                    {{ event.name }}
                </h1>
                <p class="text-gray-700 dark:text-gray-400">
                    <span>
                        <Calendar class="w-4 h-4 inline-block mr-1" />
                    </span>
                    {{ toValue(useDateFormat(event.start_date, "D.M.YYYY")) }}
                </p>
                <a href="#location" class="text-gray-700 dark:text-gray-400">
                    <span>
                        <Location class="w-4 h-4 inline-block mr-1" />
                    </span>
                    {{ event.place.location }}
                </a>
                <p class="text-gray-700 dark:text-gray-400">
                    <span>
                        <PeopleSharp class="w-4 h-4 inline-block mr-1" />
                    </span>
                    {{ event.user_count }} prijavljeno
                </p>
            </div>
            <img
                :src="'images/' + event.image_path"
                :alt="event.name"
                class="w-auto h-96 rounded-lg mt-2"
            />
            <p class="p-4 max-w-xl text-gray-700 dark:text-gray-400">
                {{ event.description }}
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
                    Sačuvaj događaj
                </button>
                <button
                    type="button"
                    class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                    :class="
                        isGoing
                            ? 'bg-yellow-400 hover:bg-yellow-600'
                            : 'bg-blue-400 hover:bg-blue-800'
                    "
                    @click="
                        isGoing = !isGoing;
                        isGoing ? event.user_count++ : event.user_count--;
                    "
                >
                    <CheckMarkOutline class="w-4 h-4 mr-1" v-if="!isGoing" />
                    <CheckMark class="w-4 h-4 mr-1" v-else />
                    Idem na događaj
                </button>
            </div>
            <div id="location" class="mt-24 w-full flex flex-col items-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.1882069839457!2d21.89029628607042!3d43.33125058016122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b733e02e006f%3A0x2fd8f95c1eacfcfb!2sFaculty%20of%20Electronic%20Engineering!5e0!3m2!1sen!2srs!4v1699122345909!5m2!1sen!2srs"
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
import { useDateFormat, toValue } from "@vueuse/core";
import Calendar from "~icons/mdi/calendar";
import Location from "~icons/mdi/location";
import StarOutline from "~icons/mdi/star-outline";
import Star from "~icons/mdi/star";
import CheckMarkOutline from "~icons/carbon/checkmark-outline";
import CheckMark from "~icons/carbon/checkmark";
import PeopleSharp from "~icons/ion/people-sharp";

defineProps(["event"]);

let isGoing = ref(false);
let isFavorite = ref(false);
</script>
