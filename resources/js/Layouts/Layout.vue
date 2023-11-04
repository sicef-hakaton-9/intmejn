<template>
    <Navbar />
    <div class="bg-primary">
        <slot />
    </div>
</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import Navbar from "@/Components/Navbar.vue";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>
