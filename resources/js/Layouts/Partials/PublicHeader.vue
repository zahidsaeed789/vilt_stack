<script setup>
import ApplicationLogo from "@/components/ApplicationLogo.vue";
import LocaleSwitcher from "@/components/LocaleSwitcher.vue";
import DarkmodeSwitcher from "@/components/DarkmodeSwitcher.vue";
import { Link } from "@inertiajs/vue3";

</script>

<template>
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <Link href="/" class="flex items-center">
        <ApplicationLogo class="w-20" />
      </Link>
      <div class="flex items-center">
        <LocaleSwitcher/>
        <DarkmodeSwitcher/>
      </div>
    </div>
  </nav>
</template>
