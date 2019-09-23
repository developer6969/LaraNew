/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// Import v-form packages [Class 11]
// https://www.youtube.com/watch?v=ezUVsuGNUnU&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=11
import { Form, HasError, AlertError } from "vform";

// Import moment (Date Display Library) [Class 16]
// https://www.youtube.com/watch?v=bV9YsIi-FUU&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=16
import moment from "moment";

// Import vue-progressbar [Class 17]
// https://www.youtube.com/watch?v=-Hl4A5cMH_I&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=17
import VueProgressBar from "vue-progressbar";

// Import sweat-alert [Class 18]
// https://www.youtube.com/watch?v=qJt6EfbQu6E&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=18
import Swal from "sweetalert2";
window.Swal = Swal;


// V-From
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-appointments', require('./components/MyAppointments.vue').default);
Vue.component('my-members', require('./components/MyMembers.vue').default);
Vue.component('my-chats', require('./components/MyChats.vue').default);


/* STEP 3c : Registring Filters [Globally]
 */
    Vue.filter("capFirst", function(value) {
        if (!value) return "";
        value = value.toString();
        return value.charAt(0).toUpperCase() + value.slice(1);
    });

    Vue.filter("shortDate", function(date) {
        return moment(date).format("DD MMM'YY");
    });


/* STEP 3d : Registring Vue-ProgressBar [Globally]
 */
    const options = {
        color: "#bffaf3",
        failedColor: "#874b4b",
        thickness: "2px",
        transition: {
            speed: "0.2s",
            opacity: "0.6s",
            termination: 300
        },
        autoRevert: true,
        location: "top",
        inverse: false
    };
    Vue.use(VueProgressBar, options);


/* STEP 3e : Registering sweat-alert toast
 */
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000
    });
    window.Toast = Toast;


/* STEP 3f : Create a global event listener for 
 * inter-component communication, i.e. CustomEvent
 * [Class 20]
 */
    let Fire = new Vue();
    window.Fire = Fire;



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        testmessage: "Hello World",
    },
    methods: {
        samplealert() {
            alert(this.testmessage);
        },
    },
    created() {
        Fire.$on("reloadDataTest", (test) => {
            alert(test);
        });
    },
    computed: {
        reversedMessage() {
            return this.testmessage
                .split("")
                .reverse()
                .join("");
        },
    },
});
