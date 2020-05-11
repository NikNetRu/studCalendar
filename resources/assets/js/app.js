
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('date', require('./components/date.vue'));
Vue.component('calendar', require('./components/calendar.vue'));
Vue.component('buttonleft', require('./components/buttonLeft.vue'));
Vue.component('buttonright', require('./components/buttonRight.vue'));

const app = new Vue({
    el: '#app',
    data: {
        date: {day : 0, month: 0, year:0}
    },
    mounted: function () {
        this.calcData();
    },
    methods: {
        changeMonth (month)  {
            this.currentMonth = month;
            console.log('test'+this.currentMonth);
        },
        calcData () {
            let dateNow = new Date;
            this.date.day = dateNow.getDate();
            this.date.month = dateNow.getMonth()+1;
            this.date.year = dateNow.getFullYear();  
        },
        decreaseMonth () {
            this.date.month--;
            if (this.date.month<1) {
                this.date.year--;
                this.date.month = 12;
            }
        },
        increaseMonth () {
            this.date.month++;
            if (this.date.month>12) {
                this.date.year++;
                this.date.month = 1;
            }
        }
    }
});

