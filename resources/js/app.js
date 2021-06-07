require("./bootstrap");

window.Vue = require("vue").default;

import Vue from "vue";
import VueRouter from "vue-router";
import CKEditor from "ckeditor4-vue";
Vue.use(VueRouter);
Vue.use(CKEditor);
import Dashboard from "./components/Admin/Dashboard/Dashboard.vue";
import Category from "./components/Admin/Category/Category.vue";
import AddCategory from "./components/Admin/Category/AddCategory.vue";
import EditCategory from "./components/Admin/Category/EditCategory.vue";
import Chanllenge from "./components/Admin/Chanllenge/Chanllenge.vue";
import AddChanllenge from "./components/Admin/Chanllenge/AddChanllenge.vue";
import EditChanllenge from "./components/Admin/Chanllenge/EditChanllenge.vue";
import Memtor from "./components/Admin/Memtor/Memtor.vue";
import AddMemtor from "./components/Admin/Memtor/AddMemtor.vue";
import EditMemtor from "./components/Admin/Memtor/EditMemtor.vue";
import User from "./components/Admin/User/User.vue";
import AddUser from "./components/Admin/User/AddUser.vue";
import EditUser from "./components/Admin/User/EditUser.vue";

const routes = [
    // -------------------Admin---------------
    {
        path: "/admin",
        component: Dashboard,
    },
    // Dashboard
    {
        path: "/dashboard",
        component: Dashboard
    },
    // User
    {
        path: "/user",
        component: User
    },
    {
        path: "/add-user",
        component: AddUser
    },
    {
        path: "/edit-user",
        component: EditUser
    },
    // Memtor
    {
        path: "/memtor",
        component: Memtor
    },
    {
        path: "/add-memtor",
        component: AddMemtor
    },
    {
        path: "/edit-memtor",
        component: EditMemtor
    },
    // Category
    {
        path: "/category",
        component: Category
    },
    {
        path: "/add-category",
        component: AddCategory
    },
    {
        path: "/edit-category",
        component: EditCategory
    },
    // Chanllenge
    {
        path: "/chanllenge",
        component: Chanllenge
    },
    {
        path: "/add-chanllenge",
        component: AddChanllenge
    },
    {
        path: "/edit-chanllenge",
        component: EditChanllenge
    }
    // Site
];
const router = new VueRouter({ routes });
const app = new Vue({
    el: "#app",
    router: router
}).$mount("#app");