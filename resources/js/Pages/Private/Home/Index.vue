<script setup>
import PrivateLayout from '@/Layouts/PrivateLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'

import { Button } from '@/components/ui/button'
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from '@/components/ui/card'

</script>

<template>
    <Head :title="__('Dashboard')" />

    <PrivateLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ __('Dashboard') }}</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">{{ __("You're logged in!") }}</div>
                </div>
                <div class="mt-6 flex justify-start gap-4">
                    <Card>
                        <CardHeader class="w-40">
                            <CardTitle>Users</CardTitle>
                            <CardDescription>
                                <Link :href="route('users.index')">View Users</Link>
                            </CardDescription>
                        </CardHeader>

                    </Card>
                </div>

            </div>
        </div>



    </PrivateLayout>
</template>
