<script setup>
import ApplicationLogo from "@/components/ApplicationLogo.vue";
import LocaleSwitcher from "@/components/LocaleSwitcher.vue";
import PublicHeader from "@/Layouts/Partials/PublicHeader.vue";
import Footer from "@/Layouts/Partials/Footer.vue";

import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="min-h-screen flex flex-col w-full bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">
        <PublicHeader />

        <div class="flex flex-col flex-grow w-full sm:justify-center items-center">
           <slot />
        </div>

        <Footer/>

    </div>
</template>
