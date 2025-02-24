<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import LoginForm from "@/Pages/Auth/Partials/LoginForm.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
});
</script>

<template>
    <PublicLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex min-h-screen items-center justify-center bg-gray-100 dark:bg-gray-900">
            <div class="w-full max-w-4xl bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 sm:p-12">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">
                    {{ __('Login to Your Account') }}
                </h2>
                <LoginForm :can-reset-password="canResetPassword" />
            </div>
        </div>
    </PublicLayout>
</template>
