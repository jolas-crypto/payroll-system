<template>
    <div>
        <nav class="header-content">
            <button
                v-for="(tab, index) in tabs"
                :key="index"
                :class="getTabButtonClasses(tab)"
                @click="activeTab = tab"
            >
            {{ tab }}
            </button>
        </nav>
    </div>
</template>

<script setup>
    import { ref } from 'vue'

    const activeTab = ref('SSS');
    const tabs = ref([
        'SSS',
        'PHIL-HEALTH',
        'PAG-IBIG'
    ]);

    const getTabButtonClasses = (tab) => {
        return [
            "px-4 py-1 font-normal text-sm",
            activeTab.value === tab
            ? "text-black border-b-4 border-blue-400 bg-gray-50"
            : "text-gray-700 hover:bg-gray-200",
        ];
    }
</script>