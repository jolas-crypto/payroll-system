<template>
    <div class="flex justify-end space-x-2 mb-2">
        <button
        type="button" 
        class="content-action-button" 
        title="Edit Details"
        @click="editTax()"
        >
            <img src="/images/icons/edit-svgrepo-com.svg" class="h-4">
            <span>Edit</span>
        </button>
        <button
        type="button" 
        class="content-action-button" 
        title="Save Details"
        @click="saveTax()"
        >
            <img src="/images/icons/save-svgrepo-com.svg" class="h-4">
            <span>Save</span>
        </button>
    </div>
    <div class="body-content-with-border">
        <h1 class="header-content text-lg">Tax Information</h1>
        <div class="space-y-2">
            <label for="type">TYPE : </label>
            <select 
            name="type" 
            id="type" 
            class="border border-gray-300 rounded-sm"
            v-model="state.taxType.type"
            @change="filterType()"
            >
                <option v-for="(type, index) in props.data.taxType" :value="index">{{ type }}</option>
            </select>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div></div>
            <div>
                <span class="header-content-table-header">SALARY FROM</span>
            </div>
            <div>
                <span class="header-content-table-header">EXEMPTION</span>
            </div>
            <div>
                <span class="header-content-table-header">PERCENT (%)</span>
            </div>
            <div class="flex justify-end">1.</div>
            <div>
                <input
                type="text" 
                id="income_1" 
                name="income_1" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_1"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_1" 
                name="exempt_1" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.exempt_1"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_1" 
                name="percent_1" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.percent_1"
                >
            </div>
            <!-- 2 -->
            <div class="flex justify-end">2.</div>
            <div>
                <input
                type="text" 
                id="income_2" 
                name="income_2" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_2"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_2" 
                name="exempt_2" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.exempt_2"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_2" 
                name="percent_2" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.percent_2"
                >
            </div>
            <!-- 3 -->
            <div class="flex justify-end">3.</div>
            <div>
                <input
                type="text" 
                id="income_3" 
                name="income_3" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_3"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_3" 
                name="exempt_3" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.exempt_3"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_3" 
                name="percent_3" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.percent_3"
                >
            </div>
            <!-- 4 -->
            <div class="flex justify-end">4.</div>
            <div>
                <input
                type="text" 
                id="income_4" 
                name="income_4" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_4"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_4" 
                name="exempt_4" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.exempt_4"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_4" 
                name="percent_4" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.percent_4"
                >
            </div>
            <!-- 5 -->
            <div class="flex justify-end">5.</div>
            <div>
                <input
                type="text" 
                id="income_5" 
                name="income_5" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_5"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_5" 
                name="exempt_5" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_5"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_5" 
                name="percent_5" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_5"
                >
            </div>
            <!-- 6 -->
            <div class="flex justify-end">6.</div>
            <div>
                <input
                type="text" 
                id="income_6" 
                name="income_6" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_6"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_6" 
                name="exempt_6" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.exempt_6"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_6" 
                name="percent_6" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.percent_6"
                >
            </div>
            <!-- 7 -->
            <div class="flex justify-end">7.</div>
            <div>
                <input
                type="text" 
                id="income_7" 
                name="income_7" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_7"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_7" 
                name="exempt_7" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.exempt_7"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_7" 
                name="percent_7" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.percent_7"
                >
            </div>
            <!-- 8 -->
            <div class="flex justify-end">8.</div>
            <div>
                <input
                type="text" 
                id="income_8" 
                name="income_8" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.income_8"
                >
            </div>
            <div>
                <input
                type="text" 
                id="exempt_8" 
                name="exempt_8" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.exempt_8"
                >
            </div>
            <div>
                <input
                type="text" 
                id="percent_8" 
                name="percent_8" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.tax.percent_8"
                >
            </div>
        </div>
    </div>
</template>

<script setup>

import { defineProps, ref, reactive } from 'vue';
import axios from 'axios';
import http_request from '../../http_request';

const props = defineProps({
    data: {
        type: Object
    }
})

const isDisabled = ref(true)

const state = reactive({
    taxType: {
        type: ''
    },
    tax: {
        income_1: null,
        income_2: null,
        income_3: null,
        income_4: null,
        income_5: null,
        income_6: null,
        income_7: null,
        income_8: null,
        exempt_1: null,
        exempt_2: null,
        exempt_3: null,
        exempt_4: null,
        exempt_5: null,
        exempt_6: null,
        exempt_7: null,
        exempt_8: null,
        percent_1: null,
        percent_2: null,
        percent_3: null,
        percent_4: null,
        percent_5: null,
        percent_6: null,
        percent_7: null,
        percent_8: null,
    }
})

const resetTax = () => {
    state.tax = {
        income_1: null,
        income_2: null,
        income_3: null,
        income_4: null,
        income_5: null,
        income_6: null,
        income_7: null,
        income_8: null,
        exempt_1: null,
        exempt_2: null,
        exempt_3: null,
        exempt_4: null,
        exempt_5: null,
        exempt_6: null,
        exempt_7: null,
        exempt_8: null,
        percent_1: null,
        percent_2: null,
        percent_3: null,
        percent_4: null,
        percent_5: null,
        percent_6: null,
        percent_7: null,
        percent_8: null,
    }
}

const editTax = () => {
    isDisabled.value = false
}

const saveTax = async () => {

    Object.assign(state.tax, {
        type: state.taxType.type
    });

    const response = await http_request.save('POST', 'tax', state.tax)

    if (response.success) {
        alert(response.data.message)
        location.reload()
    }
}

const filterType = () => {
    loadTaxInfoPerType(state.taxType.type)
}

const loadTaxInfoPerType = async (type) => {

    try {
        const response = await axios.post(`tax/type/${type}`);

        if (response.data.data) {
            for (const key in response.data.data) {
                if (state.tax.hasOwnProperty(key)) {
                    state.tax[key] = response.data.data[key];
                }
            }
        } else {
            resetTax()
        }

    } catch (error) {
        console.error('Error fetching data:', error);
    }

}

</script>
