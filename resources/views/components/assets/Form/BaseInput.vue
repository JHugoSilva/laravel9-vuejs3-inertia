<script setup>
import { computed } from 'vue';
const emit = defineEmits(['update:modelValue'])
const props = defineProps({
    modelValue: {
        type: String,
        default: ''
    },
    label: {
        type: String,
        default: ''
    }
})

const inputValue = computed({
    get() {
        return props.modelValue
    },
    set(value) {
        emit('update:modelValue', value)
    }
});

</script>
<template>
    <div class="flex flex-wrap w-full mb-3">
        <label for="email" class="inline-flex w-full text-md text-white mb-3">{{ label }}</label>
        <input v-bind="$attrs" class="inline-flex w-full p-3 outline-none rounded-md text-slate-600" v-model="inputValue"/>
    </div>
</template>
