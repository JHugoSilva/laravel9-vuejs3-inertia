<script setup>
    import {Link} from '@inertiajs/inertia-vue3';
    defineProps({
        path: {
            type: String,
            default: ''
        }
    })
</script>
<template>
    <li>
        <Link :href="path" class="inline-flex p-4 hover:bg-emerald-700">
            <slot></slot>
        </Link>
    </li>
</template>
