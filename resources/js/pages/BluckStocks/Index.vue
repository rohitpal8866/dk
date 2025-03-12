<script setup lang="ts">
import { ref, reactive, onMounted } from 'vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, useForm,router  } from '@inertiajs/vue3';
import { AgGridVue } from "ag-grid-vue3";
import { AllCommunityModule, ModuleRegistry } from 'ag-grid-community';

// Register all Community features
ModuleRegistry.registerModules([AllCommunityModule]);

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Add Stock',
        href: '/bulk-stocks',
    },
];

// Column Definitions
const columnDefs = [
    { headerName: 'Stock No', field: 'stock_no', editable: false },
    { headerName: 'Item Code', field: 'item_code', editable: true },
    { headerName: 'Item Name', field: 'item_name', editable: true },
    { headerName: 'Quantity', field: 'quantity', editable: true, type: 'number' },
    { headerName: 'Location', field: 'location', editable: true },
    {
        headerName: 'Store Name',
        field: 'store_name',
        cellEditor: 'agSelectCellEditor',
        cellEditorParams: { values: ['Store A', 'Store B', 'Store C'] },
        editable: true
    },
    { headerName: 'In-Stock Date', field: 'in_stock_date', editable: true, cellEditor: 'agDateCellEditor' }
];

// Reactive Data
const rowData = ref<any[]>([]); // Keeping rowData as reactive
const defaultColDef = reactive({ editable: true, flex: 1 });
const gridApi = ref<any>(null); // Ref to store grid API
const { post } = useForm();

const prop = defineProps({
    lastStock: Number
})

// Methods
const addNewRecord = () => {
    const newStockNo =  Number(prop.lastStock) + rowData.value.length + 1;
    const newRecord = { stock_no: newStockNo, item_code: '', item_name: '', quantity: 0, location: '', store_name: '', in_stock_date: '' };
    
    // Add the new record to rowData directly
    rowData.value.push(newRecord);
    gridApi.value.api.applyTransaction({ add: [newRecord] });
};

// Handle form submission
const submit = () => {
    // Update the row data
    // const updatedRowData = [];
    // gridApi.value.api.forEachNode((node: any) => updatedRowData.push(node.data));

    const updatedRowData: any[] = [];
    
    // Check if all required fields are filled
    gridApi.value.api.forEachNode((node: any) => {
        const data = node.data;
        
        if (!data.item_code || 
            !data.item_name || 
            data.quantity === null || 
            data.quantity === undefined || 
            data.quantity === '' || 
            !data.location) {
            alert('Please fill in all fields before saving.');
            return; // Stop further processing and prevent submission
        }
        updatedRowData.push(data);
    });

    // If any empty fields were found, stop submission
    if (updatedRowData.length === 0) return;
    
    // Post the updated row data
    router.post('/save/bulk-stocks', {
        stocks: updatedRowData,
    });
};
</script>

<template>
    <Head title="Stock List" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <form @submit.prevent="submit">
        <div class="button-group">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-5 m-5" @click="addNewRecord" type="button">Add New Record</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-5" type="submit">Save All</button>
            </div>
        
            <ag-grid-vue 
                ref="gridApi" 
                :columnDefs="columnDefs" 
                :rowData="rowData" 
                class="ag-theme-alpine"
                style="height: 400px; width: 100%" 
                :defaultColDef="defaultColDef"
                @grid-ready="(params) => gridApi.value = params.api">
            </ag-grid-vue>

            
        </form>
    </AppLayout>
</template>
