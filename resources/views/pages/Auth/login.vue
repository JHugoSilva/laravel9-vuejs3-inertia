<script setup>
import DefualtButton from '../../components/assets/DefualtButton.vue';
import BaseInput from '../../components/assets/Form/BaseInput.vue'
import {useForm} from '@inertiajs/inertia-vue3'
const form = useForm({
    email: undefined,
    password: undefined
})

function login() {
    form.post('/auth/login')
}

</script>
<template>
   <section class="flex justify-center w-full">
    <section class="flex w-[400px] flex-wrap p-3">
        <pre class="text-slate-700">{{  form  }}</pre>
        <div v-if="Object.entries(form.errors).length > 0" class="p-3 bg-red-200 text-red-500">
           {{ Object.values(form.errors)[0] }}
        </div>
        <form class="w-full" @submit.prevent="login">
            <BaseInput type="email" label="Email" v-model="form.email"/>
            <BaseInput type="password" label="Passwod" v-model="form.password"/>
            <DefualtButton :isDisabled="form.processing">Entrar</DefualtButton>
        </form>
    </section>
   </section>
</template>
