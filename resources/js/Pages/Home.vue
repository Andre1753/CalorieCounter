<template>
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Esta é a pagina principal
                    <inertia-link :href="$route('login')" method="get" class="dropdown-item">Logar</inertia-link>
                </div>
            </div>
        </div>
</template>

<script>
export default {
}
</script>