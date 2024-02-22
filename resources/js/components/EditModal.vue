<template>
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg">
            <h2 class="text-lg font-semibold mb-4">Edit Row</h2>
            <form>
                <input type="text" class="w-full border rounded-lg px-4 py-2 mb-2">
                <input type="email" class="w-full border rounded-lg px-4 py-2 mb-4">
                <div class="flex justify-end">
                    <button type="button" class="text-gray-500 hover:text-gray-700 mr-4" @click="cancelEdit">Cancel</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Save</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>

    import { defineEmits } from 'vue'

    const emits = defineEmits(['cancel']);
    
    const cancelEdit = () => {
        emits('cancel');
    }

</script>
