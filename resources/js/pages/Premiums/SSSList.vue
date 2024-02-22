<template>
    <div class="body-content-with-border">
        <data-table-list
        :url="props.url_sss"
        :table_header="props.table_header_sss"
        :default_sort_direction="props.default_sort_direction"
        :default_sort_field="props.default_sort_field"
        :show_entries="props.show_entries"
        :filter="state.filter"
        >
        <template v-slot:actions="item">
            <div class="flex space-x-1">
                <button
                type="button" 
                class="content-action-button" 
                title="Edit Details"
                @click="editRowInformation(item)">
                    <img src="/images/icons/edit-svgrepo-com.svg" class="h-4">
                    <span>Edit</span>
                </button>
                <button type="button" class="content-action-button" title="Delete Details">
                    <img src="/images/icons/delete-svgrepo-com.svg" class="h-4">
                    <span>Delete</span>
                </button>
            </div>
        </template>
        </data-table-list>
    </div>
    <edit-modal v-if="isEditingRow" @cancel="closeModalCancel"></edit-modal>
</template>

<script setup>
    import { reactive, ref } from 'vue';
    import DataTableList from '../../components/DataTable/DataTableList.vue';
    import EditModal from '@/components/EditModal.vue';

    const props = defineProps({
        url_sss: String,
        table_header_sss: Array,
        show_entries_default: Number,
        default_sort_direction: String,
        default_sort_field: String,
        show_entries: Array,
    })

    const isEditingRow = ref(false);
    const editedRowItem = ref({});

    const state = reactive({
        filter: {
            year: { value: '', operator: '%' },
        },
    })

    const editRowInformation = (items) => {
        isEditingRow.value = true

        editedRowItem.value = items.item
    }

    const closeModalCancel = () => {
        isEditingRow.value = false
    }

</script>