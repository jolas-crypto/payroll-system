<template>
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg">
            <h2 class="text-lg font-semibold mb-4">EDIT ROW</h2>
            <form @submit.prevent="submitForm(state.editData.id)" class="">
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="relative">
                        <label for="salary_from" class="block text-sm font-medium text-gray-700">SALARY FROM</label>
                        <input 
                        type="text"
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.salary_from"
                        name="salary_from"
                        step="0.01"
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
                        v-model="state.editData.salary_to"
                        name="salary_to"
                        >
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'pagibig'"> 
                        <label for="employee_share" class="block text-sm font-medium text-gray-700">EMPLOYEE SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg"
                        placeholder="0.00"
                        title="Please enter a valid number with up to two decimal places" 
                        v-model="state.editData.employee_share"
                        name="employee_share"
                        >
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'pagibig'"> 
                        <label for="employer_share" class="block text-sm font-medium text-gray-700">EMPLOYER SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg"
                        placeholder="0.00"
                        title="Please enter a valid number with up to two decimal places" 
                        v-model="state.editData.employer_share"
                        name="employer_share"
                        >
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'pagibig'"> 
                        <label for="total_ee_er_share" class="block text-sm font-medium text-gray-700">TOTAL EE ER SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg"
                        placeholder="0.00"
                        title="Please enter a valid number with up to two decimal places" 
                        v-model="state.editData.total_ee_er_share"
                        name="total_ee_er_share"
                        >
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'pagibig'"> 
                        <label for="salary_credit" class="block text-sm font-medium text-gray-700">SALARY CREDIT</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg"
                        placeholder="0.00"
                        title="Please enter a valid number with up to two decimal places" 
                        v-model="state.editData.salary_credit"
                        name="salary_credit"
                        >
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="regular_salary_credit" class="block text-sm font-medium text-gray-700">REGULAR SALARY CREDIT</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.regular_salary_credit"
                        name="regular_salary_credit"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="mpf_salary_credit" class="block text-sm font-medium text-gray-700">MPF SALARY CREDIT</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.mpf_salary_credit"
                        name="mpf_salary_credit"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="total_salary_credit" class="block text-sm font-medium text-gray-700">TOTAL SALARY CREDIT</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.total_salary_credit"
                        name="total_salary_credit"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="regular_employer_share" class="block text-sm font-medium text-gray-700">REGULAR EMPLOYER SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.regular_employer_share"
                        name="regular_employer_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="regular_employee_share" class="block text-sm font-medium text-gray-700">REGULAR EMPLOYEE SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.regular_employee_share"
                        name="regular_employee_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="total_share" class="block text-sm font-medium text-gray-700">TOTAL SHARE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.total_share"
                        name="total_share"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="employer_compensation" class="block text-sm font-medium text-gray-700">EMPLOYER COMPENSATION</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.employer_compensation"
                        name="employer_compensation"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="employee_compensation" class="block text-sm font-medium text-gray-700">EMPLOYEE COMPENSATION</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.employee_compensation"
                        name="employee_compensation"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="total_compensation" class="block text-sm font-medium text-gray-700">TOTAL COMPENSATION</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.total_compensation"
                        name="total_compensation"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="mpf_employer" class="block text-sm font-medium text-gray-700">MPF EMPLOYER</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.mpf_employer"
                        name="mpf_employer"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="mpf_employee" class="block text-sm font-medium text-gray-700">MPF EMPLOYEE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.mpf_employee"
                        name="mpf_employee"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="total_mpf" class="block text-sm font-medium text-gray-700">TOTAL MPF</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.total_mpf"
                        name="total_mpf"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="total_employer" class="block text-sm font-medium text-gray-700">TOTAL EMPLOYER</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.total_employer"
                        name="total_employer"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="total_employee" class="block text-sm font-medium text-gray-700">TOTAL EMPLOYEE</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.total_employee"
                        name="total_employee"
                        />
                        <div class="absolute top-7 left-0 pl-2 flex items-center pointer-events-none">
                            <img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">
                        </div>
                    </div>
                    <div class="relative" v-if="props.premiumType == 'sss'"> 
                        <label for="total_overall" class="block text-sm font-medium text-gray-700">TOTAL OVERALL</label>
                        <input 
                        type="text" 
                        pattern="\d+(\.\d{1,2})?" 
                        class="pl-7 pr-2 py-1 border rounded-lg" 
                        placeholder="0.00"
                        v-model="state.editData.total_overall"
                        name="total_overall"
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
    import { defineEmits, defineProps, ref } from 'vue';
    import http_request from '../http_request';

    const props = defineProps([
        'editedRow', 
        'premiumType',
        'premiumUrl'
    ]);

    const emits = defineEmits(['cancel']);

    const state = ref({
        editData: props.editedRow
    });
    
    const cancelEdit = () => {
        emits('cancel');
    };

    const submitForm = async (id) => {
        const response = await http_request.update('PUT', `/${props.premiumUrl}/${id}`, state.editData);

        if (response.success) {
            // alert(response.data.message)
            // location.reload()
        } else {

        }
    };

</script>
