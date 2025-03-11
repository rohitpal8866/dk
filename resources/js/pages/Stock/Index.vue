<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Stock List',
        href: '/stocks',
    },
];

defineProps({
    stocks: {
        type: Array
    }
});

const columns = [
    { data: 'stock_no' },
    { data: 'item_name' },
    { data: 'store_name' },
    { data: 'quantity' }
];

const form = useForm({});

const deleteStock = (id) => {
    if (confirm('Are you sure you want to delete this stock item?')) {
        form.delete(`stocks/${id}`);
    }
};
</script>

<template>
    <Head title="Stock List" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-8">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="text-2xl font-semibold mb-4">Stock Information</h2>
                        <DataTable :data="stocks" :columns="columns" class="w-full">
                            <thead class="bg-gray-100 text-left">
                                <tr>
                                    <th class="py-3 px-4 border-b">Stock No</th>
                                    <th class="py-3 px-4 border-b">Item</th>
                                    <th class="py-3 px-4 border-b">Store Name</th>
                                    <th class="py-3 px-4 border-b">Qty</th>
                                </tr>
                            </thead>
                        </DataTable>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
