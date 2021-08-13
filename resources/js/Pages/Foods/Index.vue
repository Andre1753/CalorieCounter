<template>
  <layout>
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12">
          <h1 class="float-left text-xl">Comidas</h1>
          <inertia-link :href="$route('food.create')" class="float-right btn btn-primary">Adicionar Comida</inertia-link>
        </div>
      </div>

      <div class="row">
          <table class="table table-bordered bg-white">
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Quantidade</th>
              <th>Carboidrato</th>
              <th>Proteina</th>
              <th>Gordura</th>
              <th>Calorias</th>
              <th></th>
            </tr>
            <tr v-for="food in foods" :key="food.id"> 
              <td>{{food.id}}</td>
              <td>{{food.name}}</td>
              <td>{{food.amount}}</td>
              <td>{{food.carbohydrate}}</td>
              <td>{{food.protein}}</td>
              <td>{{food.fat}}</td>
              <td>{{food.calories}}</td>
              <td>
                <inertia-link :href="$route('food.destroy', {food: food})" method="delete" class="btn bg-red-600 text-white">
                  <i class="fas fa-trash"></i>
                </inertia-link>
              </td>
            </tr>
          </table>
<!-- 
          <pagination :links="leads.links"></pagination> -->
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "./../../Shared/Layout";
export default {
  components: {
    Layout,
  },
  props: ["foods"]
};
</script>