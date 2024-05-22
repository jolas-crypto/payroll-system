<template>
    <div>
        <div v-if="show" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center">
                <svg class="animate-spin h-5 w-5 mr-3 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                </svg>
                <span>{{ message }}</span>
            </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { defineProps } from 'vue';

    const props = defineProps({
        show: {
            type: Boolean,
            required: true,
        },
        message: {
            type: String,
            default: 'Processing...',
        },
    });
    
</script>