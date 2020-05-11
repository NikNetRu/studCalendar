<template>
    <button id="buttonLeft" name = "buttonLeft" @click="clickDecreaseMonth()"> Назад </button>
</template>
<script>
     export default {
        name: "buttonLeft",
        components: {
        },
        mounted() {
        },
        methods: {
            clickDecreaseMonth () {
                this.$emit('decreasemonth');
            }
        }
    }

</script>

