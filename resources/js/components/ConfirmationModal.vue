<template>
    <div v-if="show">
        <div class="modal-overlay">
            <div class="modal">
                <p>{{ message }}</p>
                <div class="button-group">
                    <button @click="confirmAction">Confirm</button>
                    <button @click="cancelAction">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script setup>
    import { ref, defineProps, defineEmits } from 'vue';

    const props = defineProps({
        message: String,
    });

    const { emit } = defineEmits(['confirm', 'cancel']);

    const show = ref(false);

    const confirmAction = () => {
        emit('confirm');
        show.value = false;
    };

    const cancelAction = () => {
        emit('cancel');
        show.value = false;
    };
</script>

<style scoped>
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
}

.button-group {
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
}
</style>
  