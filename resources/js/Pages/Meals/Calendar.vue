<template>
    <layout>
        <div class="w-full p-2 m-2 bg-gray-100 rounded-lg shadow">
            <div class = "flex flex-wrap justify-center">
                <div class = "flex flex-wrap w-full h-12 p-1 m-1 text-xl font-bold bg-white rounded-lg shadow-lg">
                    <p class ="w-1/3 p-1 text-center text-green-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50 rounded-l-md" @click="year--"><i class="fas fa-chevron-circle-left"></i></p>
                    <p class ="w-1/3 p-1 text-center text-green-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50">{{year}}</p>
                    <p class ="w-1/3 p-1 text-center text-green-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50 rounded-r-md" @click="year++"><i class="fas fa-chevron-circle-right"></i></p>
                </div>
                <div v-for="(month,index) in month_names" :key="index">
                    <div class="p-1 m-1 font-sans bg-white rounded shadow-md lg:w-72 w-80 bg-blend-luminosity bg-gradient-to-b from-green-50 via-white to-green-50">
                        <p class="p-1 text-xl font-semibold text-center text-indigo-800">{{month}}</p>
                        <div class="p-1 m-1">
                            <div class="grid grid-cols-7 font-semibold text-green-800 border-b-2">
                                <div v-for="(days, index) in day_names" :key="index">
                                    <div class="grid place-items-center" :class ="{'text-red-600': days == 'Dom'}">
                                        <p>{{days}}</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 gap-1 font-semibold text-center text-gray-800">
                                <div v-for="day in daysgenerater()[index]" :key="day.index">
                                    <inertia-link :href="$route('meal.create', {date: day+'-'+(index+1)+'-'+year })">
                                        <div :class="{' ring-green-400 ring-4 rounded-full': isToday(day,index) == true, 'text-red-600': isSunday(day,index) == true , ' hover:bg-green-100': isToday(day,index) == false }" >
                                            <p>{{day}}</p>
                                        </div>
                                    </inertia-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>
 
 <script>
    import Layout from './../../Shared/Layout.vue'
    export default {
        props: ['month_names', 'day_names'],
        components: {
            Layout
        },
        data(){
            return {
                year: new Date().getFullYear(),
            }
        },
        
        methods: {   
            days_of_month(){    
                var leap = (this.year % 4 === 0 && this.year % 100 !== 0 && this.year % 400 !== 0) || (this.year % 100 === 0 && this.year % 400 ===0);      
                return [31, leap ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            },
            daysgenerater() {
                let days = [];
                for (let k = 0; k < this.days_of_month().length; k++) {
                    days.push([]);
                    for (let i = 1; i <= this.days_of_month()[k]; i++) {
                        if(days[k].length < new Date(this.year,k).getDay()) {
                            i-=i;
                            days[k].push('');
                            continue; 
                        };
                        days[k].push(i);
                    }
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