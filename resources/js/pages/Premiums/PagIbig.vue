<template>
    <div class="flex justify-end space-x-2 mb-2">
        <button
        type="button" 
        class="content-action-button" 
        title="Edit Details"
        @click="editPagibig()"
        >
            <img src="/images/icons/edit-svgrepo-com.svg" class="h-4">
            <span>Edit</span>
        </button>
        <button
        type="button" 
        class="content-action-button" 
        title="Save Details"
        @click="savePagibig()"
        >
            <img src="/images/icons/save-svgrepo-com.svg" class="h-4">
            <span>Save</span>
        </button>
    </div>
    <div class="body-content-with-border">
        <h1 class="header-content text-lg">Pag-Ibig Information</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div></div>
            <div>
                <span class="header-content-table-header">DESCRIPTION</span>
            </div>
            <div>
                <span class="header-content-table-header">EMPLOYEE SHARE</span>
            </div>
            <div>
                <span class="header-content-table-header">EMPLOYER SHARE</span>
            </div>
            <div>
                <span class="pagibig-label">Gross Pay Less Than < :</span>
            </div>
            <div>
                <input
                type="text" 
                id="gross_pay_from" 
                name="gross_pay_from" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.pagibigInfo.gross_pay_from"
                >
                <p class="text-red-500 text-sm" v-if="state.errors?.[0]?.gross_pay_from">{{ state.errors[0].gross_pay_from[0] }}</p>
            </div>
            <div>
                <input
                type="text" 
                id="less_ee_share" 
                name="less_ee_share" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.pagibigInfo.less_ee_share"
                >
                <p class="text-red-500 text-sm" v-if="state.errors?.[0]?.less_ee_share">{{ state.errors[0].less_ee_share[0] }}</p>
            </div>
            <div>
                <input
                type="text" 
                id="less_er_share" 
                name="less_er_share" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.pagibigInfo.less_er_share"
                >
                <p class="text-red-500 text-sm" v-if="state.errors?.[0]?.less_er_share">{{ state.errors[0].less_er_share[0] }}</p>
            </div>
            <!-- Space -->
            <div></div>
            <div></div>
            <div>
                <input
                type="text" 
                id="more_ee_share" 
                name="more_ee_share" 
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.pagibigInfo.more_ee_share"
                >
                <p class="text-red-500 text-sm" v-if="state.errors?.[0]?.more_ee_share">{{ state.errors[0].more_ee_share[0] }}</p>
            </div>
            <div>
                <input
                type="text"
                id="more_er_share"
                name="more_er_share"
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.pagibigInfo.more_er_share"
                >
                <p class="text-red-500 text-sm" v-if="state.errors?.[0]?.more_er_share">{{ state.errors[0].more_er_share[0] }}</p>
            </div>
            <div></div>
            <div>
                <span for="field1" class="pagibig-label">Maximum Share (<img src="/images/icons/peso-svgrepo-com.svg" class="h-5 w-5">) : </span>
            </div>
            <div>
                <input
                type="text"
                id="max_ee_share"
                name="max_ee_share"
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.pagibigInfo.max_ee_share"
                >
                <p class="text-red-500 text-sm" v-if="state.errors?.[0]?.max_ee_share">{{ state.errors[0].max_ee_share[0] }}</p>
            </div>
            <div>
                <input
                type="text"
                id="max_er_share"
                name="max_er_share"
                class="pagibig-text-input"
                :disabled="isDisabled"
                v-model="state.pagibigInfo.max_er_share"
                >
                <p class="text-red-500 text-sm" v-if="state.errors?.[0]?.max_er_share">{{ state.errors[0].max_er_share[0] }}</p>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { reactive, ref, onMounted } from 'vue';
    import http_request from '../../http_request';

    const props = defineProps({
        data: {
            type: Object
        }
    })

    const isDisabled = ref(true);

    const state = reactive({
        pagibigInfo: {
            gross_pay_from: props.data.pagIbigInfo[0]?.gross_pay_from || null,
            less_ee_share: props.data.pagIbigInfo[0]?.less_ee_share || null,
            less_er_share: props.data.pagIbigInfo[0]?.less_er_share || null,
            more_ee_share: props.data.pagIbigInfo[0]?.more_ee_share || null,
            more_er_share: props.data.pagIbigInfo[0]?.more_er_share || null,
            max_ee_share: props.data.pagIbigInfo[0]?.max_ee_share || null,
            max_er_share: props.data.pagIbigInfo[0]?.max_er_share || null,
        },
        errors: []
    })

    const editPagibig = () => {
        isDisabled.value = false;
    }

    const savePagibig = async () => {
        const response = http_request.save('POST', 'pag-ibig', state.pagibigInfo);

        if ((await response).success) {
            alert((await response).data.message)
            location.reload()
        } else {
            if ((await response).status.status === 422) {
                state.errors.push((await response).status.data.errors)
            }
        }
    }

</script>