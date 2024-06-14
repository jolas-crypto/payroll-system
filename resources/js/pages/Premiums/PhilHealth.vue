<template>
    <div class="flex justify-end space-x-2 mb-2">
        <button
        type="button" 
        class="content-action-button" 
        title="Add Details"
        @click="addPremium()"
        >
            <img src="/images/icons/add-circle-svgrepo-com.svg" class="h-4">
            <span>Add</span>
        </button>
        <button
        type="button" 
        class="content-action-button" 
        title="Export Details"
        >
            <img src="/images/icons/export-content-svgrepo-com.svg" class="h-4">
            <span>Export</span>
        </button>
        <div class="">
            <input
            type="file"
            ref="fileInput"
            accept=".csv"
            class="hidden"
            />
            <button
            class="content-action-button"
            >
            <img src="/images/icons/import-content-svgrepo-com.svg" class="h-4">
            <span>Import</span>
            </button>
        </div>
    </div>
    <div class="body-content-with-border">
        <data-table-list
        ref="philHealthPremiumTable"
        :url="props.url_philhealth"
        :table_header="props.table_header_pagibig"
        :default_sort_direction="props.default_sort_direction"
        :default_sort_field="props.default_sort_field"
        >
        <template v-slot:filters>
            <select name="year" id="year" v-model="state.filter.year.value" class="border border-gray-300 rounded-sm" @change="changeYear">
                <option v-for="year in props.year_list" :key="year" :value="year">{{ year }}</option>
            </select>
        </template>
        <template v-slot:actions="item">
            <div class="flex space-x-1">
                <button
                type="button" 
                class="content-action-button" 
                title="Edit Details"
                @click="editRow(item)"
                >
                    <img src="/images/icons/edit-svgrepo-com.svg" class="h-4">
                    <span>Edit</span>
                </button>
                <button 
                type="button" 
                class="content-action-button" 
                title="Delete Details"
                @click="deleteRow(item)"
                >
                    <img src="/images/icons/delete-svgrepo-com_gray.svg" class="h-4">
                    <span>Delete</span>
                </button>
            </div>
        </template>
        </data-table-list>
    </div>
    <AddModalPhilHealth
    v-if="isAddingRow"
    @cancel="closeModalCancel"
    ></AddModalPhilHealth>
    <EditModalPhilHealth
    v-if="isEditRow"
    :edit-row-item="editedRow"
    :phil-health-url="'phil-health'"
    @cancel="closeModalCancel"
    ></EditModalPhilHealth>
</template>

<script setup>

import { reactive, ref, onMounted } from 'vue';
import DataTableList from '../../components/DataTable/DataTableList.vue';
import EditModalPhilHealth from '@/components/EditModalPhilHealth.vue';
import AddModalPhilHealth from '@/components/AddModalPhilHealth.vue';
import http_request from '../../http_request';

const props = defineProps({
    url_philhealth: String,
    table_header_pagibig: Array,
    show_entries_default: Number,
    default_sort_direction: String,
    default_sort_field: String,
    show_entries: Array,
    year_list: Array,
})

const isAddingRow = ref(false)
const isEditRow = ref(false)
const editedRow = ref({})

const state = reactive({
    filter: {
        year: { value: '', operator: '=' },
    },
})

onMounted(() => {
    state.filter.year.value = getCurrentYear()
})

const getCurrentYear = () => {
    return new Date().getFullYear().toString();
};

const addPremium = () => {
    isAddingRow.value = true
}

const closeModalCancel = () => {
    isAddingRow.value = false
    isEditRow.value = false
}

const editRow = (rowData) => {
    isEditRow.value = true
    editedRow.value = rowData.item
}

const deleteRow = async (item) => {
    let id = item.item.id
    let confirmation = confirm('Are you sure, you want to delete this record?')

    if (confirmation) {
        const response = await http_request.delete('DELETE', `phil-health/${id}`)

        if (response.success) {
            alert(response.data.message)
            location.reload()
        } else {
        }
    }
}

</script>
