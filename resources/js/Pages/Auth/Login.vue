<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form @submit.prevent="submit">
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " v-model="form.email" name="email" required autocomplete="email" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" v-model="form.password" name="password" required autocomplete="current-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" v-model="form.remember" name="remember" id="remember">

                                <label class="form-check-label" for="remember">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                               Logar
                            </button>

                            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
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