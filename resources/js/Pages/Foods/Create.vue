<template>
    <layout>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h1 class="float-left">Adicionar Comida</h1>
                </div>
            </div>
            <div class="row">
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" v-model="form.name" placeholder="Nome da comida">
                    </div>
                    <div class="form-group">
                        <label for="name">Quantidade</label>
                        <input type="number" class="form-control" id="amount" name="amount" v-model="form.amount" step="any" placeholder="Quantidade da comida">
                    </div>
                    <div class="form-group">
                        <label for="name">Carboidrato</label>
                        <input type="number" class="form-control" id="carbohydrate" name="carbohydrate" v-model="form.carbohydrate" step="any" placeholder="Carboidrato na comida">
                    </div>
                    <div class="form-group">
                        <label for="name">Proteina</label>
                        <input type="number" class="form-control" id="protein" name="protein" v-model="form.protein" step="any" placeholder="Proteina na comida">
                    </div>
                    <div class="form-group">
                        <label for="name">Gordura</label>
                        <input type="number" class="form-control" id="fat" name="fat" v-model="form.fat" step="any" placeholder="Gordura na comida">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
  </layout>
</template>

<script>
import Layout from "./../../Shared/Layout.vue";
export default {
    components:{
        Layout
    },
    data() {
        return {
            form: {
                name: null,
                amount: null,
                carbohydrate: null,
                protein: null,
                fat: null,
            },
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/food', this.form)
        },
    },
}
</script>   