<template>
    <div class="pb-2">
        <nav class="header-content">
            <a
            v-for="(tab, index) in tabs"
            :key="index"
            :class="getTabButtonClasses(tab)"
            :href="`/${tab.toLowerCase().replace(' ', '-')}`"
            @click.prevent="changeTab(tab)"
            >
            {{ tab }}
            </a>
            <!-- <button
                v-for="(tab, index) in tabs"
                :key="index"
                :class="getTabButtonClasses(tab)"
                @click="activeTab = tab"
            >
            {{ tab }}
            </button> -->
        </nav>
    </div>
</template>

<script setup>
    import { ref, defineProps } from 'vue';
    import axios from 'axios';

    const activeTab = ref('SSS');
    const tabs = ref([
        'SSS',
        'PHIL-HEALTH',
        'PAG-IBIG'
    ]);

    const props = defineProps({
        url_pag_ibig: String
    })

    const setActiveTab = (tab, event) => {
        event.preventDefault();
        activeTab.value = tab;
    };

    const getTabButtonClasses = (tab) => {
        return [
            "px-4 py-1 font-normal text-sm",
            activeTab.value === tab
            ? "text-black border-b-4 border-blue-400 bg-gray-50"
            : "text-gray-700 hover:bg-gray-200",
        ];
    }

    const changeTab = async (tab) => {
        activeTab.value = tab
        const urlTab = tab.toLowerCase()
        console.log(urlTab)
        window.location.href = props.url_pag_ibig
    };
</script>