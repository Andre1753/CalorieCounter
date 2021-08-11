<template>
  <layout>
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12">
          <h1 class="float-left">Comidas</h1>
          <inertia-link :href="$route('food.create')" class="float-right btn btn-primary">Adicionar Comida</inertia-link>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered bg-white">
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Quantidade</th>
              <th>Carboidrato</th>
              <th>Proteina</th>
              <th>Gordura</th>
              <th>Calorias</th>
              <!-- <th></th> -->
            </tr>
            <tr v-for="food in foods" :key="food.id"> 
              <td>{{food.id}}</td>
              <td>
                <inertia-link :href="$route('food.show', {food: food})">{{food.name}}</inertia-link>
              </td>
              <td>{{food.amount}}</td>
              <td>{{food.carbohydrate}}</td>
              <td>{{food.protein}}</td>
              <td>{{food.fat}}</td>
              <td>{{food.calories}}</td>
              <!-- <td>
                <inertia-link :href="$route('lead.view', {lead: lead})">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="arrow-icon">
                    <polygon
                      points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707"
                    />
                  </svg>
                </inertia-link>
              </td> -->
            </tr>
          </table>
<!-- 
          <pagination :links="leads.links"></pagination> -->
        </div>
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