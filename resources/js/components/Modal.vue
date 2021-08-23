<template>
    <div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            show() {
                console.log(this.$el);
                $(this.$el).modal('show');
            },
            close() {
                $(this.$el).modal('hide');
            }
        }
    }
</script>