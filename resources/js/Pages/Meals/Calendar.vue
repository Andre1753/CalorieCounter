<template>
  <layout>
    <div class="bg-white md:py-8 px-4 lg:mx-auto lg:px-8">
      <div class="row justify-content-between">
        <p class ="w-1/3 p-1 text-center text-green-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50 rounded-l-md" @click="month > 0 ? month-- : (month = 11, year--)"><i class="fas fa-chevron-circle-left"></i></p>
        <p class ="w-1/3 p-1 text-center text-green-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50">{{month_names[month]}} de {{year}}</p>
        <p class ="w-1/3 p-1 text-center text-green-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50 rounded-r-md" @click="month < 11 ? month++ : (month = 0, year++)"><i class="fas fa-chevron-circle-right"></i></p>
      </div>
      <div class="inline-flex flex-col items-start justify-center h-full w-full grid grid-cols-7 mt-4">
        <p class="h-full text-sm font-medium text-gray-800 uppercase text-red-600">Domingo</p>
        <p class="h-full text-sm font-medium text-gray-800 uppercase">Segunda</p>
        <p class="h-full text-sm font-medium text-gray-800 uppercase">Terça</p>
        <p class="h-full text-sm font-medium text-gray-800 uppercase">Quarta</p>
        <p class="h-full text-sm font-medium text-gray-800 uppercase">Quinta</p>
        <p class="h-full text-sm font-medium text-gray-800 uppercase">Sexta</p>
        <p class="h-full text-sm font-medium text-gray-800 uppercase">Sábado</p>
      </div>
      <div class="inline-flex flex-col items-start justify-center h-full w-full grid grid-cols-7">
        <div class="flex items-start w-full h-full px-2 pt-2.5 pb-24 border border-gray-200" v-for="day in daysgenerater()" :key="day.index">
          <div class="w-full items-center"> 
            <span class="text-sm font-medium text-gray-800 float-left">{{day}}</span>
            <button v-if="day != ''" class="btn-sm rounded-full bg-yellow-500 text-sm font-medium text-white float-right "><i class="fas fa-plus"></i></button>              
          </div>
        </div>
      </div>
    </div>
  </layout>
</template>
  
 <script>
    import Layout from './../../Shared/Layout.vue'
    export default {
      props: ['month_names'],
      components: {
          Layout
      },
      data(){
        return {              
          month: new Date().getMonth(),
          year: new Date().getFullYear(),
        }
      },
      
      methods: {   
          addMonth(){
            var data = this.date;
            Date.parse(data);
            data.setMonth(data.getMonth()+1);
            data.setDate(data.getDate());
            this.date = data;
            console.log(data);
            console.log(this.date);
          },
          days_of_month(){    
              var leap = (this.year % 4 === 0 && this.year % 100 !== 0 && this.year % 400 !== 0) || (this.year % 100 === 0 && this.year % 400 ===0);      
              return [31, leap ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
          },
          daysgenerater() {
              let days = [];               
              for (let i = 1; i <= this.days_of_month()[this.month]; i++) {
                  if(days.length < new Date(this.year,this.month).getDay()) {
                      i-=i;
                      days.push('');
                      continue; 
                  };
                  days.push(i);
              }
              return days;
          },
          today() {
              let today = new Date();
              this.year = today.getFullYear();
          },
          isToday(day,month) {
              const today = new Date();
              const dayintable = new Date(this.year,month,day);
              return today.toDateString() === dayintable.toDateString() ? true : false;
          },
          isSunday(day,month) {
              const dayintable = new Date(this.year,month,day);
              return dayintable.getDay() == 0 ? true : false;
          }                
        }
    }        
 </script>