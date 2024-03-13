<template>
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg">
            <h2 class="text-lg font-semibold mb-4">EDIT ROW</h2>
            <form @submit.prevent="submitForm(editedRow.id)" class="">
                <div class="grid grid-cols-3 gap-3">
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">SALARY FROM</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Salary From"
                            v-model="editedRow.salary_from"
                            step="0.01"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">SALARY TO</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Salary To"
                            v-model="editedRow.salary_to"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">REGULAR SALARY CREDIT</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Regular Salary Credit"
                            v-model="editedRow.regular_salary_credit"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">MPF SALARY CREDIT</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="MPF Salary Credit"
                            v-model="editedRow.mpf_salary_credit"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">TOTAL SALARY CREDIT</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Total Salary Credit"
                            v-model="editedRow.total_salary_credit"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">REGULAR EMPLOYER SHARE</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Regular Employer Share"
                            v-model="editedRow.regular_employer_share"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">REGULAR EMPLOYEE SHARE</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Regular Employee Share"
                            v-model="editedRow.regular_employee_share"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">TOTAL SHARE</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Total Share"
                            v-model="editedRow.total_share"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">EMPLOYER COMPENSATION</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Employer Compensation"
                            v-model="editedRow.employer_compensation"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">EMPLOYEE COMPENSATION</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Employee Compensation"
                            v-model="editedRow.employee_compensation"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">TOTAL COMPENSATION</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Total Compensation"
                            v-model="editedRow.total_compensation"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">MPF EMPLOYER</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="MPF Employer"
                            v-model="editedRow.mpf_employer"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">MPF EMPLOYEE</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="MPF Employee"
                            v-model="editedRow.mpf_employee"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">TOTAL MPF</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Total MPF"
                            v-model="editedRow.total_mpf"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">TOTAL EMPLOYER</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Total Employer"
                            v-model="editedRow.total_employer"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">TOTAL EMPLOYEE</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Total Employee"
                            v-model="editedRow.total_employee"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                    <div class="relative"> 
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">TOTAL OVERALL</label>
                        <input type="number" 
                            class="pl-7 pr-2 py-1 border rounded-lg" 
                            placeholder="Total Overall"
                            v-model="editedRow.total_overall"/>
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/money-bag-svgrepo-com.svg" class="h-4 w-4">
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="text-gray-500 hover:text-gray-700 mr-4" @click="cancelEdit">Cancel</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Save</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
    import { defineEmits, defineProps } from 'vue'
    import http_request from '../http_request'

    // Properties
    const { editedRow } = defineProps(['editedRow'])

    // Even Cancel Emit
    const emits = defineEmits(['cancel']);
    
    const cancelEdit = () => {
        emits('cancel');
    }

    const submitForm = async (id) => {
        const response = await http_request.update('PUT', `/sss-premiums/${id}`, editedRow);

        if (response.success) {
            alert(response.data.message)
            location.reload()
        } else {
            data.errors = response.data
        }
    }

</script>
