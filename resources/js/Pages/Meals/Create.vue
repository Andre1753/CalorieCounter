<template>
    <layout>
        <div class="container">
            <div class="row mb-3">
                <div class="row">
                    <h1 class="float-left text-xl text-blue-600">Adicionar Refeição</h1>
                    {{date}}
                </div>
            </div>  
            <div class="row justify-content-right">
                <form @submit.prevent="submit">
                    <div class="grid grid-cols-3 gap-4" v-for="(form, index) in forms" :key="index">
                        <div class="form-group">
                            <label for="name">Quantidade</label>
                            <input type="number" class="form-control" name="amount[]" v-model="form.amount" step="any" placeholder="Quantidade da comida">
                            <span v-if="$page.props.errors.amount != null">{{$page.props.errors.amount}}</span> 
                        </div>
                        <div class="form-group">
                            <label for="name">Comida</label>
                            <select name="food_id[]" v-model="form.food_id" class="form-control">
                                <option v-for="food in foods" :key="food.id" :value="food.id">{{food.name}}</option>
                            </select>
                            <span v-if="$page.props.errors.food_id != null">{{ $page.props.errors.food_id}}</span> 
                        </div>  
                        <div class="form-group">
                            <label for="name">Horario</label>
                            <input required type="time" class="form-control" name="created_at[]" v-model="form.created_at" step="any" placeholder="Proteina na comida">
                            <span v-if="$page.props.errors.created_at != null">{{ $page.props.errors.created_at}}</span>
                        </div>
                    </div>
                    <a @click="addMeal()" class="btn bg-yellow-600">Add Refeição</a>
                    <button type="submit" class="btn bg-indigo-600">Adicionar</button>
                </form>
            </div>
        </div>
  </layout>
</template> 

<script>
import Layout from "./../../Shared/Layout.vue";
export default {
    props: ['foods', 'date'],
    components:{
        Layout
    },  
    updated () {
        console.log(this.page.props)
    },
    data() {
        return {
            forms: [{amount: null, food_id: null, created_at: null}],
        }
    },
    methods: {
        addMeal() {
            this.forms.push({amount: null, food_id: null, created_at: null})
        },
        submit() {
            this.$inertia.post('/meal', this.forms)
        },
    },
}
</script>   