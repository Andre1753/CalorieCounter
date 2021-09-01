<template>
    <modal ref="modal">
        <div class="row mb-3">
            <h1 class="text-xl text-blue-600">Adicionar refeição do dia {{date}}</h1>
        </div>  
        <div class="row justify-content-right">
            <form @submit.prevent="submit">                
                <div class="form-group"> 
                    <label for="name">Horario</label>
                    <input required type="time" class="form-control" name="created_at" v-model="created_at" step="any" placeholder="Proteina na comida">
                    <span v-if="$page.props.errors.created_at">{{ $page.props.errors.created_at}}</span>
                </div>
                <div v-for="(form, index) in forms" :key="index">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group">
                            <label for="name">Quantidade</label>
                            <input type="number" class="form-control" name="amount[]" v-model="form.amount" step="any" placeholder="Quantidade da comida">
                            <span v-if="$page.props.errors.amount">{{$page.props.errors.amount}}</span> 
                            {{form.amount}}
                        </div>
                        <div class="form-group">
                            <label for="name">Comida</label>
                            <select name="food_id[]" v-model="form.food_id" class="form-control">
                                <option v-for="food in foods" :key="food.id" :value="food.id">{{food.name}}</option>
                            </select>
                            <span v-if="$page.props.errors.food_id">{{ $page.props.errors.food_id}}</span> 
                            {{form.food_id}}
                        </div>  
                    </div>                    
                </div>
                <a @click="addMeal()" class="btn bg-yellow-600">Add Refeição</a>
                <button type="submit" class="btn bg-indigo-600">Adicionar</button>
            </form>
        </div>
    </modal>
</template>

<script>
    import Modal from './../components/Modal.vue';
    export default {
        props: ['foods', 'date'],
        components:{
            Modal
        },  
        data() {
            return {
                forms: [{amount: null, food_id: null}],
                created_at: ""
            }
        },
        methods: {
            showModal() {
                this.getModal().show();
            },
            closeModal() {
                this.getModal().close();
            },
            getModal(){
                return this.$refs.modal;
            },  
            addMeal() {
                this.forms.push({amount: null, food_id: null});
            },
            submit() {
                this.$inertia.post(`/meal/store/${this.date}`, [this.created_at, this.forms]);
            },
        },
    }
</script>