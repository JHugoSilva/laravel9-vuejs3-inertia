<script setup>
    import Content from '../assets/Content.vue';
</script>
<template>
    <section class="flex w-full justify-center bg-gray-600 text-white border-solid border-t-[1px] border-t-black">
        <Content class="justify-between items-center">
            <ul class="flex w-full">
                <slot></slot>
            </ul>
        </Content>
    </section>
</template>
