<template>
    <div class = "day" :id = "day_id">
        <div class = "day">
            {{day}}
        </div>
        <div class="create_task">
            <img class = "create_task_icon" src="{!!asset('../public/icons/plus.svg')!!}">                                  
        </div>
        <div class = "tasks" :id = "task_id">
        </div>
    </div>
</template>
<script>
     export default {
        name: "day",
        props: {day: 0},
        data: function () {
            return {
                day_id: 'day_'+this.day,
                task_id : 'task_'+ this.day
            }
        },
        mounted () {
            console.log("mounted - day");
        },
        }
    

</script>
