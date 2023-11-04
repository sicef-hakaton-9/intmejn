<template>
    <a
        :href="href"
        class="hover:bg-button w-80 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition duration-300 ease-in-out"
        ><div class="flex items-center mb-2">
            <slot name="icon"></slot>
            <h5
                class="ms-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"
            >
                {{ title }}
            </h5>
        </div>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
            <slot name="description"></slot>
        </p>
    </a>
</template>

<script setup>
defineProps({
    title: String,
    href: String,
});
</script>
