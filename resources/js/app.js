require("./bootstrap");

window.Vue = require("vue").default;

import { Form, HasError, AlertError } from "vform";
window.Form = Form;

let Fire = new Vue();
window.Fire = Fire;

//Import Alert
import Swal from "sweetalert2";
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
});
window.Toast = Toast;

import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

let routes = [
    {
        path: "/pemilik_toko",
        component: require("./components/Pemilik_toko.vue").default,
    },
    {
        path: "/pengguna",
        component: require("./components/Pengguna.vue").default,
    },
];

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

const router = new VueRouter({
    mode: "history",
    routes,
});

const app = new Vue({
    el: "#app",
    router,
});
