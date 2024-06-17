<template>
    <div class="pb-2">
        <nav class="header-content">
            <a
            v-for="(tab, index) in tabs"
            :key="index"
            :class="getTabButtonClasses(tab)"
            :href="`/${tab.toLowerCase()}`"
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
    import { ref, defineProps, onMounted } from 'vue';
    import { getCurrentURL } from '../helpers';

    const activeTab = ref('SSS');
    const tabs = ref([
        'SSS',
        'PHIL-HEALTH',
        'PAG-IBIG',
        'TAX',
    ]);

    const props = defineProps({
        url_pag_ibig: String,
        url_premium: String,
        url_phil_health: String,
        url_tax: String
    })

    const getTabButtonClasses = (tab) => {
        return [
            "px-4 py-1 font-normal text-sm",
            activeTab.value === tab
            ? "text-black border-b-4 border-blue-400 bg-gray-50"
            : "text-gray-700 hover:bg-gray-200",
        ];
    }

    const changeTab = async (tab) => {
        const urlTab = tab.toLowerCase()

        if (urlTab == 'sss') {
            window.location.href = props.url_premium
        } else if (urlTab == 'pag-ibig') {
            window.location.href = props.url_pag_ibig
        } else if (urlTab == 'phil-health') {
            window.location.href = props.url_phil_health
        } else {
            window.location.href = props.url_tax
        }
    }

    onMounted(() => {
        const currentURL = getCurrentURL(window.location.pathname)

        activeTab.value = currentURL.value
    })
</script>