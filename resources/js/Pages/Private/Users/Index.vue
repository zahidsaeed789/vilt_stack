<script setup>
import { computed } from 'vue';
import { Head } from '@inertiajs/vue3';
import PrivateLayout from "@/Layouts/PrivateLayout.vue";

import {
    Table,
    TableHeader,
    TableHead,
    TableBody,
    TableRow,
    TableCell,
    TableEmpty
} from "@/components/ui/table"; // Adjust path if necessary

const props = defineProps({
    users: Array,
});
const users = computed(() => props?.users || []); // Fallback to empty array if users are undefined
</script>

<template>
    <Head title="Users" />
    <PrivateLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ "Users" }}
            </h2>
        </template>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Users Table using shadcn components -->
            <Table class="divide-y divide-gray-200">
                <TableHeader>
                    <TableRow>
                        <TableHead class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </TableHead>
                        <TableHead class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </TableHead>
                        <TableHead class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email Verification At
                        </TableHead>
                    </TableRow>
                </TableHeader>

                <TableBody>
                    <!-- Render rows if users exist -->
                    <TableRow v-for="user in users" :key="user.email">
                        <TableCell class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ user.name }}
                        </TableCell>
                        <TableCell class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ user.email }}
                        </TableCell>
                        <TableCell class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ user.email_verified_at }}
                        </TableCell>
                    </TableRow>

                    <!-- No data state using TableEmpty -->
                    <TableEmpty v-if="users.length === 0">
                        <TableRow>
                            <TableCell colspan="3" class="px-6 py-4 text-center text-sm text-gray-500">
                                No users found.
                            </TableCell>
                        </TableRow>
                    </TableEmpty>
                </TableBody>
            </Table>
        </div>
    </PrivateLayout>
</template>
