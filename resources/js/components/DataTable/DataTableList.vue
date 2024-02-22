<template>
    <div class="flex justify-center items-center space-x-4 text-sm text-gray-700 max-h-screen" v-if="loading">
        <svg class="animate-spin h-12 w-12 text-gray-600 absolute top-36" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
        </path>
        </svg>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-white">
                <tr>
                    <th v-for="(column, index) in tableHeader" :key="index" class="header-content-table-header" scope="col">
                        <div class="flex space-x-1">
                            <p v-if="column.sortable" class="underline cursor-pointer uppercase">{{ column.label }}</p>
                            <div v-if="column.sortable">
                                <span v-if="sortDirection=='desc' && sortField==column.field ">&uarr;</span>
                                <span v-if="sortDirection=='asc' && sortField==column.field ">&darr;</span>
                            </div>
                            <div v-else>
                                <p class="uppercase">{{ column.label }}</p>
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in tableBody.data" :key="index" class="transition duration-300 ease-in-out hover:bg-gray-100">
                    <template v-for="(column, index) in tableHeader" :key="index">
                        <td class="px-1 py-2 whitespace-nowrap text-sm text-gray-900">
                            <p v-if="typeof column.has_slot !== 'undefined' || column?.has_slot == 'false'">
                                <slot :item="item" :name="column.field"></slot>
                            </p>
                            <p v-else>
                                {{ item[column.field] }}
                            </p>
                        </td>
                    </template>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- <div class="flex justify-end text-xs items-center space-x-2 pt-2" v-if="tableBody">
        <div class="flex space-x-1 items-center">
            <label class="text-sm">Show</label>
            <select id="per_page" v-model="pagination" class="text-sm px-2 border border-gray-200 rounded" name="per_page">
                <option v-for="(entry, index) in showEntries" :key="index" :value="entry">{{ entry }}</option>
            </select>
            <span class="text-sm font-normal">entries</span>
        </div>
        <span class="font-bold items-center flex" v-if="tableBody.meta">{{tableBody.meta?.total}} item/s</span>
    </div> -->
</template>

<script setup>
    import { ref, onMounted, watch } from 'vue';
    import axios from 'axios';

    const props = defineProps({
        url: String,
        table_header: Array,
        show_entries_default: Number,
        default_sort_direction: String,
        default_sort_field: String,
        show_entries: Array,
        filter: Object,
    })

    const tableHeader = ref(props.table_header);
    const tableBody = ref([]);
    const pagination = ref(props.show_entries_default);
    const sortDirection = ref(props.default_sort_direction);
    const showEntries = ref(props.show_entries);
    const sortField = ref(props.default_sort_field);
    const search = ref(props.filter);
    const loading = ref(false);

    onMounted(() => {
        getDataManagement()
    });

    watch(pagination, () => {
        getDataManagement()
    });

    const getDataManagement = (page = 1) => {
        loading.value = true

        const params = {
            page: page,
            paginate: pagination.value,
            sort_direction: sortDirection.value,
            sort_field: sortField.value,
            queries: search.value
        }

        axios.post(props.url, params)
        .then((response) => {
            tableBody.value = response.data
        }).catch((error) => {

        }).finally(() => {
            loading.value = false
        });
    }

    defineExpose({
        getDataManagement
    })
</script>