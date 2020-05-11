<template>
         <div class = "month" id = "month">
             <div class = "row" id = "week_info">
                 <div class = "day day_info" id = "monday">
                     Monday
                 </div>
                 <div class = "day day_info" id = "tuesday"> 
                     Tuesday
                 </div>
                 <div class = "day day_info" id = "wednesday">
                     Wednesday
                 </div>
                 <div class = "day day_info" id = "thursday"> 
                     Thursday
                 </div>
                 <div class = "day day_info" id = "friday">
                     Friday
                 </div>
                 <div class = "day day_info" id = "saturday">
                     Saturday
                 </div>
                 <div class = "day day_info" id = "sunday">
                     Sunday
                 </div>
             </div>
             <div v-for="n in dayN">
                    <div v-show = "n%7 == 0" class = "week" id = "week">
                        <day :day = "n">
                        </day>
                    </div>
             </div>
        </div>
</template>
<script>
    import axios from 'axios';
    import day from './day'

     export default {
        name: "calendar",
        data () { return {days: 30}
            },
        props:{date: Object},
        components: {day},
        computed: {
            dayN: function() {
                let x = this.date.month;
                let y = this.date.year;
                let numDays = 28 + ((x + Math.floor(x / 8)) % 2) + 2 % x + Math.floor((1 + (1 - (y % 4 + 2) % (y % 4 + 1)) * ((y % 100 + 2) % (y % 100 + 1)) + (1 - (y % 400 + 2) % (y % 400 + 1))) / x) + Math.floor(1/x) - Math.floor(((1 - (y % 4 + 2) % (y % 4 + 1)) * ((y % 100 + 2) % (y % 100 + 1)) + (1 - (y % 400 + 2) % (y % 400 + 1)))/x);
                console.log(numDays);
                return numDays;
            }
        },
        mounted () {
        },
        methods: {
            }
        }


</script>

