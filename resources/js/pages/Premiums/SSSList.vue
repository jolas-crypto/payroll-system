<template>
    <div class="flex justify-end space-x-2 mb-2">
        <button
        type="button" 
        class="content-action-button" 
        title="Add Details"
        @click="addPremiums()">
            <img src="/images/icons/add-circle-svgrepo-com.svg" class="h-4">
            <span>Add</span>
        </button>
        <button
        type="button" 
        class="content-action-button" 
        title="Export Details">
            <img src="/images/icons/export-content-svgrepo-com.svg" class="h-4">
            <span>Export</span>
        </button>
        <button
        type="button" 
        class="content-action-button" 
        title="Import Details">
            <img src="/images/icons/import-content-svgrepo-com.svg" class="h-4">
            <span>import</span>
        </button>
    </div>
    <div class="body-content-with-border">
        <data-table-list
        ref="sssPremiumTable"
        :url="props.url_sss"
        :table_header="props.table_header_sss"
        :default_sort_direction="props.default_sort_direction"
        :default_sort_field="props.default_sort_field"
        :show_entries="props.show_entries"
        :filter="state.filter"
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
                @click="editRowInformation(item)">
                    <img src="/images/icons/edit-svgrepo-com_gray.svg" class="h-4">
                    <span>Edit</span>
                </button>
                <button 
                type="button" 
                class="content-action-button" 
                title="Delete Details"
                @click="deleteRowInformation(item)">
                    <img src="/images/icons/delete-svgrepo-com_gray.svg" class="h-4">
                    <span>Delete</span>
                </button>
                <button 
                type="button" 
                class="content-action-button" 
                title="Insert Details Below"
                @click="insertRowInformation()">
                    <img src="/images/icons/insert-below-svgrepo-com.svg" class="h-4">
                    <span>Insert</span>
                </button>
            </div>
        </template>
        </data-table-list>
    </div>
    <edit-modal 
    v-if="isEditingRow" 
    :edited-row="editedRowItem"
    @cancel="closeModalCancel">
    </edit-modal>
    <add-modal
    v-if="isAddingRow"
    @cancel="closeModalCancel"
    >
    </add-modal>
</template>

<script setup>
    import { reactive, ref, onMounted } from 'vue';
    import DataTableList from '../../components/DataTable/DataTableList.vue';
    import EditModal from '@/components/EditModal.vue';
    import AddModal from '@/components/AddModal.vue';
    import http_request from '../../http_request';

    const props = defineProps({
        url_sss: String,
        table_header_sss: Array,
        show_entries_default: Number,
        default_sort_direction: String,
        default_sort_field: String,
        show_entries: Array,
        year_list: Array,
    })

    const isEditingRow = ref(false);
    const isAddingRow = ref(false);
    const editedRowItem = ref({});
    const sssPremiumTable = ref();

    onMounted(() => {
        state.filter.year.value = getCurrentYear();
    })

    const getCurrentYear = () => {
        return new Date().getFullYear().toString();
    };

    const state = reactive({
        filter: {
            year: { value: '', operator: '=' },
        },
    })

    const closeModalCancel = () => {
        isEditingRow.value = false
        isAddingRow.value = false
    }

    const changeYear = () => {
        sssPremiumTable.value.withFilter()
    }

    const addPremiums = () => {
        isAddingRow.value = true
    }

    const editRowInformation = (items) => {
        isEditingRow.value = true
        editedRowItem.value = items.item
    }

    const deleteRowInformation = async (item) => {
        let id = item.item.id
        let confirmation = confirm('Are you sure, you want to delete this record?')

        if (confirmation) {
            const response = await http_request.delete('DELETE', `sss-premiums/${id}`)

            if (response.success) {
                alert(response.data.message)
                location.reload()
            } else {
                // data.errors = response.data
            }
        }
    }

    const insertRowInformation = () => {
        
    }

</script>