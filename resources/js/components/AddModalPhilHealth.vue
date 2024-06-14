<template>
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg">
            <h2 class="text-lg font-semibold mb-4">ADD ROW</h2>
            <form @submit.prevent="addPremiums()" class="">
                <!-- <div class="mb-2">
                    <label for="year">Year
                        <select name="year" id="year" v-model="state.addInfo.year" class="border border-gray-300 rounded-sm">
                            <option v-for="year in yearList" :key="year" :value="year">{{ year }}</option>
                        </select>
                    </label>
                </div> -->
                <div class="grid grid-cols-3 gap-3">
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">SALARY FROM</label>
                        <input 
                        type="text"
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="salary_from"
                        step="0.01"
                        v-model="state.philHealth.salary_from"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_to" class="block text-sm font-medium text-gray-700">SALARY TO</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg"
                        placeholder="0.00"
                        title="Please enter a valid number with up to two decimal places" 
                        name="salary_to"
                        v-model="state.philHealth.salary_to"
                        >
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="employee_share" class="block text-sm font-medium text-gray-700">EMPLOYEE SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="employee_share"
                        v-model="state.philHealth.employee_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="employer_share" class="block text-sm font-medium text-gray-700">EMPLOYER SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="employer_share"
                        v-model="state.philHealth.employer_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_ee_er_share" class="block text-sm font-medium text-gray-700">CONTRIBUTION PERCENTAGE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_ee_er_share"
                        v-model="state.philHealth.total_ee_er_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="button-cancel" @click="cancelEdit()">Cancel</button>
                    <button type="submit" class="button-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>

import { defineEmits, reactive } from 'vue';
import http_request from '../http_request';

const emits = defineEmits(['cancel'])

const cancelEdit = () => {
    emits('cancel')
}

const state = reactive({
    philHealth: {
        company_id: 1,
        reported_id: 1,
        salary_from: null,
        salary_to: null,
        employee_share: null,
        employer_share: null,
        total_ee_er_share: null,
        salary_credit: null
    }
})

const addPremiums = async () => {
    const response = await http_request.save('POST', 'phil-health', state.philHealth);

    if (response.success) {
        alert(response.data.message)
        location.reload()
    } else {

    }
}

</script>
