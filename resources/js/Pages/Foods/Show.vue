<template>
    <layout>
        <div>
            {{food.name}}<br />              
            {{food.amount}} <br />        
            {{food.carbohydrate}} <br />        
            {{food.protein}} <br />        
            {{food.fat}} <br />        
            {{food.calories}}
        </div>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue'
export default {
    props: ['food'],
    components: {
        Layout,
    },
}
</script>