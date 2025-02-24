<script setup>
import Checkbox from "@/components/Checkbox.vue";
import InputError from "@/components/InputError.vue";
import InputLabel from "@/components/InputLabel.vue";
import PrimaryButton from "@/components/PrimaryButton.vue";
import TextInput from "@/components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <form @submit.prevent="submit" class="w-full space-y-2">
        <div>
            <InputLabel for="email" :value="__('Email')" />

            <TextInput
                id="email"
                type="email"
                class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:ring-gray-500 focus:border-indigo-500"
                v-model="form.email"
                required
                autofocus
                autocomplete="username"
            />

            <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div>
            <InputLabel for="password" :value="__('Password')" />

            <TextInput
                id="password"
                type="password"
                class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:ring-gray-500 focus:border-indigo-500"
                v-model="form.password"
                required
                autocomplete="current-password"
            />

            <InputError class="mt-2" :message="form.errors.password" />
        </div>

        <div class="flex items-center">
            <Checkbox name="remember" v-model:checked="form.remember" />
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </div>

        <div class="flex flex-wrap items-center justify-between">
            <Link
                v-if="canResetPassword"
                :href="route('password.request')"
                class="underline text-sm text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-200"
            >
                {{ __('Forgot your password?') }}
            </Link>

            <PrimaryButton
                class="ml-auto rounded-lg tracking-wide px-6 py-3 text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-indigo-500 dark:hover:bg-indigo-600"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                {{ __('Log in') }}
            </PrimaryButton>
        </div>
    </form>
</template>
