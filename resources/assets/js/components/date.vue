<template>
    <div class="" id="date" name = "date">
        {{date.day}} - {{date.month}} - {{date.year}}
    </div>
</template>
<script>
     export default {
        name: "date",
        props: {date : Object}
    }

</script>

