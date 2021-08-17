<template>
    <layout>
        <div class="container">
            <div class="row mb-3">
                <div class="row">
                    <h1 class="float-left text-xl text-blue-600">Adicionar Refeição</h1>
                </div>
            </div>
            {{amountFoods}}
            <div class="row justify-content-right">
                <form @submit.prevent="submit">
                    <div class="grid grid-cols-3 gap-4" v-for="i in amountFoods" :key="i">
                        <div class="form-group">
                            <label for="name">Quantidade</label>
                            <input type="number" class="form-control" :id='"amount"+i' :name='"amount"+i' step="any" placeholder="Quantidade da comida">
                        </div>
                        <div class="form-group">
                            <label for="name">Comida</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select required :id='"food_id"+i' :name='"food_id"+i' class="select2 form-input">
                                    <option v-for="food in foods" :key="food.id" :value="food.id">{{food.name}}</option> 
                                </select>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="name">Horario</label>
                            <input type="number" class="form-control" :id='"protein"+i' :name='"protein"+i' step="any" placeholder="Proteina na comida">
                        </div>
                    </div>
                    <a @click="amountFoods++" class="btn bg-yellow-600">Add Refeição</a>
                    <button type="submit" class="btn bg-indigo-600">Adicionar</button>
                </form>
            </div>
        </div>
  </layout>
</template> 

<script>
import Layout from "./../../Shared/Layout.vue";
export default {
    props: ['foods'],
    components:{
        Layout
    },
    data() {
        return {
            amountFoods: 1,
            form: {
                amount: null,
                food_id: null,
                protein: null,
            },
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/meal', this.form)
        },
    },
}
</script>   