<template>
    <div class="min-h-screen bg-purple-400 flex justify-center items-center">
        <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block"></div>
        <div class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block"></div>
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <form @submit.prevent="submit">
                <div>
                    <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Entrar na conta</h1>
                </div>
                <div class="space-y-4">
                    <input type="email" v-model="form.email" name="email" placeholder="Email" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" required />
                    <input type="password" v-model="form.password" name="password" placeholder="Senha" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" required />
                </div>
                <div class="text-center mt-6">
                    <button type="submit" class="py-3 w-64 text-xl text-white bg-purple-400 rounded-2xl">Entrar</button>
                </div>
            </form>
        </div>
        <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
        <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block"></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: null,
                password: null,
                remember: null,
            },
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/login', this.form)
        },
    },
}
</script>