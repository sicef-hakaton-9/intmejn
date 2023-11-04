<template>
    <div
        class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"
    >
        <div class="flex items-center justify-between mb-4">
            <h5
                class="text-xl font-bold leading-none text-gray-900 dark:text-white"
            >
                Vodiči
            </h5>
            <a
                href="#"
                class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500"
            >
                Vidi sve
            </a>
        </div>
        <div class="flow-root">
            <ul
                role="list"
                class="divide-y divide-gray-200 dark:divide-gray-700"
            >
                <li v-for="guide in guides" :key="guide.id">
                    <Link
                        :href="'/vodic/' + guide.id"
                        class="block py-3 sm:py-4 hover:bg-gray-50 dark:hover:bg-gray-700"
                    >
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img
                                    class="w-8 h-8 rounded-full"
                                    :src="'/images/' + guide.image_path"
                                    alt="Neil image"
                                />
                            </div>
                            <div class="flex-1 min-w-0">
                                <p
                                    class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                >
                                    {{ guide.name }}
                                </p>
                                <div class="flex items-center">
                                    <svg
                                        class="w-4 h-4 text-yellow-300 mr-1"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 22 20"
                                    >
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                                        />
                                    </svg>
                                    <p
                                        class="ml-1 text-sm font-bold text-gray-500 dark:text-white"
                                    >
                                        {{ guide.rating }}
                                    </p>
                                    <span
                                        class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"
                                    ></span>
                                    <p
                                        class="text-sm font-medium text-gray-500 dark:text-white"
                                    >
                                        {{ guide.reviews }} recenzija
                                    </p>
                                </div>
                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"
                            >
                                <div>
                                    <Link
                                        class="mt-2 text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                                    >
                                        <CheckMarkOutline
                                            class="w-4 h-4 mr-1"
                                        />
                                        Unajmi vodiča
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </Link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
import CheckMarkOutline from "~icons/carbon/checkmark-outline";
// defineProps(["guides"]);

let guides = [
    {
        id: 1,
        name: "Igor Jovanović",
        rating: 4.95,
        reviews: 73,
        image_path: "users/profile-picture-1.jpg",
    },
    {
        id: 2,
        name: "Nikola Krstić",
        rating: 2.95,
        reviews: 10,
        image_path: "users/profile-picture-2.jpg",
    },
];
</script>
