<script setup>
import {Link} from '@inertiajs/inertia-vue3';
defineProps({
    path: {
        type: String,
        default: undefined
    },
    isDisabled: {
        type: Boolean,
        default: false
    }
})
</script>
<template>
    <button v-if="!path" :disabled="isDisabled" class="py-2 px-4 text-white bg-emerald-600 hover:bg-[#4AD695] rounded-md">
        <slot></slot>
    </button>
    <Link v-if="path" :href="path" class="py-2 px-4 text-white bg-emerald-600 hover:bg-[#4AD695] rounded-md">
        <slot></slot>
    </Link>
</template>
