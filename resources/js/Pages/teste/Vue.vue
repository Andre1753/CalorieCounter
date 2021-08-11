<template>
    <layout>
        <div>
            Este é um elemento Vue, Bem-vindo {{nome}} {{sobrenome}}
        </div>
    </layout>
</template>

<script>
import Layout from "./../../Shared/Layout.vue";
export default {
    components:{
        Layout
    },
    props: ['nome', 'sobrenome']
}
</script>   