<template>
    <button id="buttonRight" name = "buttonRight" @click="clickIncreaseMonth()"> Вперёд </button>
</template>
<script>
     export default {
        name: "buttonLeft",
        components: {
        },
        mounted() {
        },
        methods: {
            clickIncreaseMonth () {
                this.$emit('increasemonth');
            }
        }
    }

</script>


