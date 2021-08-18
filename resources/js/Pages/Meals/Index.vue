<template>
  <layout>
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12">
          <h1 class="float-left text-xl">Refeiçoes</h1>
          <inertia-link :href="$route('meal.create')" class="float-right btn btn-primary">Adicionar Refeicao</inertia-link>
        </div>
      </div>

      <div class="row">
          <table class="table table-bordered bg-white">
            <tr>
              <th>Id</th>
              <th>Quantidade</th>
              <th>Refeicao</th>
              <th>Carboidrato</th>
              <th>Proteina</th>
              <th>Gordura</th>
              <th>Calorias</th>
              <th>Criacao</th>
              <th></th>
            </tr>
            <tr v-for="meal in meals" :key="meal.id"> 
              <td>{{meal.id}}</td>
              <td>{{meal.amount}}</td>
              <td>{{meal.food_id}}</td>
              <td>{{meal.carbohydrate}}</td>
              <td>{{meal.protein}}</td>
              <td>{{meal.fat}}</td>
              <td>{{meal.calories}}</td>
              <td>{{meal.created_at}}</td>
              <td>
                <inertia-link :href="$route('meal.update', {meal: meal})" class="btn bg-yellow-400 text-white">
                  <i class="fas fa-edit"></i>
                </inertia-link>
                <inertia-link :href="$route('meal.destroy', {meal: meal})" method="delete" class="btn bg-red-600 text-white ml-1">
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
  props: ["meals"]
};
</script>