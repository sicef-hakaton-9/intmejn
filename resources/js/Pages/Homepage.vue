<template>
    <!-- Jumbotron -->
    <section
        class="bg-center bg-no-repeat bg-[url('/images/yiran-ding-JQRyYCC2OIM-unsplash.jpg')] bg-gray-700 bg-blend-multiply"
    >
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl"
            >
                Dobrodošli u naš grad
            </h1>
            <p
                class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48"
            >
                Da li ste spremni da otkrijete sve što naš grad ima da ponudi?
            </p>
            <div
                class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4"
            >
                <a
                    href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900"
                >
                    Prijavi se kao vodič
                    <svg
                        class="w-3.5 h-3.5 ml-2"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 10"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9"
                        />
                    </svg>
                </a>
                <!-- <a
                    href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400"
                >
                    Learn more
                </a> -->
            </div>
        </div>
    </section>

    <div class="bg-primary">
        <ul
            class="flex flex-col md:flex-row flex-wrap justify-center items-center md:justify-center md:items-center md:py-4 md:px-8 gap-4"
        >
            <HomepageCard href="/dogadjaji" title="Događaji">
                <template v-slot:icon>
                    <TicketOutline class="w-8 h-8" />
                </template>
                <template v-slot:description
                    >Pogledajte događaje u gradu i saznajte više o
                    njima</template
                >
            </HomepageCard>
            <HomepageCard href="/transport" title="Transport">
                <template v-slot:icon>
                    <Bus class="w-8 h-8" />
                </template>
                <template v-slot:title>Transport</template>
                <template v-slot:description
                    >Pogledajte red vožnje i ostale informacije o javnom
                    prevozu, parkingu</template
                >
            </HomepageCard>
            <HomepageCard href="/znamenitosti" title="Znamenitosti">
                <template v-slot:icon>
                    <TownHall class="w-8 h-8" />
                </template>
                <template v-slot:description
                    >Saznajte više o znamenitostima u gradu</template
                >
            </HomepageCard>
            <HomepageCard href="/" title="Vodiči">
                <template v-slot:icon>
                    <SchoolOutline class="w-8 h-8" />
                </template>
                <template v-slot:description
                    >Pogledajte vodiče i saznajte više o njima</template
                >
            </HomepageCard>
        </ul>
    </div>
    <div class="h-64 bg-secondary">
        <HomepageMap />
    </div>
</template>

<script setup>
import HomepageCard from "@/Components/Homepage/Card.vue";
import Bus from "~icons/mdi/bus";
import TicketOutline from "~icons/ion/ticket-outline";
import TownHall from "~icons/maki/town-hall";
import SchoolOutline from "~icons/mdi/school-outline";
import HomepageMap from "@/Components/Homepage/Map.vue";
</script>
