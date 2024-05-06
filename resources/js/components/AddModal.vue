<template>
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg">
            <h2 class="text-lg font-semibold mb-4">ADD ROW</h2>
            <form @submit.prevent="addPremiums()" class="">
                <div class="mb-2">
                    <label for="year">Year
                        <select name="year" id="year" v-model="state.addInfo.year" class="border border-gray-300 rounded-sm">
                            <option v-for="year in yearList" :key="year" :value="year">{{ year }}</option>
                        </select>
                    </label>
                </div>
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
                        v-model="state.addInfo.salary_from"
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
                        v-model="state.addInfo.salary_to"
                        >
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="regular_salary_credit" class="block text-sm font-medium text-gray-700">REGULAR SALARY CREDIT</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="regular_salary_credit"
                        v-model="state.addInfo.regular_salary_credit"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="mpf_salary_credit" class="block text-sm font-medium text-gray-700">MPF SALARY CREDIT</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="mpf_salary_credit"
                        v-model="state.addInfo.mpf_salary_credit"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_salary_credit" class="block text-sm font-medium text-gray-700">TOTAL SALARY CREDIT</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_salary_credit"
                        v-model="state.addInfo.total_salary_credit"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="regular_employer_share" class="block text-sm font-medium text-gray-700">REGULAR EMPLOYER SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="regular_employer_share"
                        v-model="state.addInfo.regular_employer_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="regular_employee_share" class="block text-sm font-medium text-gray-700">REGULAR EMPLOYEE SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="regular_employee_share"
                        v-model="state.addInfo.regular_employee_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_share" class="block text-sm font-medium text-gray-700">TOTAL SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_share"
                        v-model="state.addInfo.total_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="employer_compensation" class="block text-sm font-medium text-gray-700">EMPLOYER COMPENSATION</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="employer_compensation"
                        v-model="state.addInfo.employer_compensation"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="employee_compensation" class="block text-sm font-medium text-gray-700">EMPLOYEE COMPENSATION</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="employee_compensation"
                        v-model="state.addInfo.employee_compensation"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_compensation" class="block text-sm font-medium text-gray-700">TOTAL COMPENSATION</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_compensation"
                        v-model="state.addInfo.total_compensation"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="mpf_employer" class="block text-sm font-medium text-gray-700">MPF EMPLOYER</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="mpf_employer"
                        v-model="state.addInfo.mpf_employer"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="mpf_employee" class="block text-sm font-medium text-gray-700">MPF EMPLOYEE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="mpf_employee"
                        v-model="state.addInfo.mpf_employee"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_mpf" class="block text-sm font-medium text-gray-700">TOTAL MPF</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_mpf"
                        v-model="state.addInfo.total_mpf"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_employer" class="block text-sm font-medium text-gray-700">TOTAL EMPLOYER</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_employer"
                        v-model="state.addInfo.total_employer"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_employee" class="block text-sm font-medium text-gray-700">TOTAL EMPLOYEE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_employee"
                        v-model="state.addInfo.total_employee"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="total_overall" class="block text-sm font-medium text-gray-700">TOTAL OVERALL</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        name="total_overall"
                        v-model="state.addInfo.total_overall"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="button-cancel" @click="cancelEdit">Cancel</button>
                    <button type="submit" class="button-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
    import { defineEmits, ref, reactive, onMounted } from 'vue';
    import http_request from '../http_request';
    import { 
        getListCurrentDateWithLessThan, 
        getCurrentDate 
    } from '../helpers';

    const emits = defineEmits(['cancel']);
    const yearList = getListCurrentDateWithLessThan(2010);

    const state = reactive({
        addInfo: {
            year: null,
            salary_from: null,
            salary_to: null,
            regular_salary_credit: null,
            mpf_salary_credit: null,
            total_salary_credit: null,
            regular_employer_share: null,
            regular_employee_share: null,
            total_share: null,
            employer_compensation: null,
            employee_compensation: null,
            total_compensation: null,
            mpf_employer: null,
            mpf_employee: null,
            total_mpf: null,
            total_employer: null,
            total_overall: null,
        }
    })

    onMounted(() => {
        state.addInfo.year = getCurrentDate()
    });
    
    const cancelEdit = () => {
        emits('cancel');
    };

    const addPremiums = async () => {
        const response = await http_request.save('POST', 'sss-premiums', state.addInfo);

        if (response.success) {
            alert(response.data.message)
            location.reload()
        } else {

        }
    }

</script>
