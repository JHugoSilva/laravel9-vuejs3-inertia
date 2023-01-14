<script setup lang="ts">
import Content from '../components/assets/Content.vue';
import DefualtButton from '../components/assets/DefualtButton.vue';
import NavMenu from "../components/nav/NavMenu.vue";
import NavItem from '../components/nav/NavItem.vue';
import Login from '../components/Auth/login.vue';
</script>

<template>
    <header class="flex w-full flex-wrap">
        <section class="flex w-full justify-center bg-[#101010] p-4 text-white">
            <Content class="justify-between items-center">
                <div class="logo">
                    Meu Blog
                </div>
                <div>
                    <DefualtButton path="/auth/login">Login</DefualtButton>
                </div>
            </Content>
        </section>
        <NavMenu>
            <NavItem path="/">Home</NavItem>
            <NavItem path="/about">Sobre</NavItem>
            <NavItem path="/news">Notícias</NavItem>
            <NavItem path="/contact">Contato</NavItem>
        </NavMenu>
    </header>
    <section class="flex flex-wrap justify-center w-full py-4 bg-[#EBEBEB]">
        <Content>
            <slot></slot>
        </Content>
    </section>
</template>

<style lang="css" scoped>
.logo {
    @apply text-white text-xl font-bold;
    background-image: linear-gradient(to right, #52EAA3, rgb(14 116 144));
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
</style>
