<template>
    <layout>
        <div class="bg-green-100 py-14">
            <!-- <h3 class="text-2xl tracking-widest text-green-600 text-center">Bem-Vindo</h3>
            <h1 class="mt-8 text-center text-5xl text-green-600 font-bold">Our Features & Services.</h1> -->
            <!-- Box -->
            <div class="md:flex md:justify-center md:space-x-8 md:px-14">
                <!-- box-1 -->
                <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                    <div class="w-sm">
                        <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/a17abde8d83650a582a28432/users-with-speech-bubbles-vector_53876-82250.jpg" alt="" />
                        <div class="mt-4 text-green-600 text-center">
                            <h1 class="text-xl font-bold">Alimentos</h1>
                            <p class="mt-4 text-gray-600">Aqui você pode adicionar e examinar a tabela nutricional dos alimentos.</p>
                            <inertia-link :href="$route('food.index')" class="btn mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">Ver Mais</inertia-link>
                        </div>
                    </div>
                </div>

                <!-- box-2 -->
                <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                    <div class="w-sm">
                        <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/3b242447f922540fbe750cab/fdf.jpg" alt="" />
                        <div class="mt-4 text-green-600 text-center">
                            <h1 class="text-xl font-bold">Refeições</h1>
                            <p class="mt-4 text-gray-600">Aqui você adiciona as refeições do dia, para que o nosso sistema possa calcular sua ingestão calorica </p>
                            <inertia-link :href="$route('food.index')" class="btn mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">Ver Mais</inertia-link>
                        </div>
                    </div>
                </div>

                <!-- box-3 -->
                <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                    <div class="w-sm">
                        <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/8cc47b39e719570b996d9879/dsds.jpg" alt="" />
                        <div class="mt-4 text-green-600 text-center">
                            <h1 class="text-xl font-bold">Happy Customers</h1>
                            <p class="mt-4 text-gray-600">Nisl purus in mollis nunc sed id semper. Rhoncus aenean vel elit scelerisque mauris.</p>
                            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from './../Shared/Layout.vue'
export default {
    components: {
        Layout,
    }
}
</script>