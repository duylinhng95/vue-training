import Vue from "vue";
import VueTify from "vuetify";
import VueRouter from "vue-router";
import routes from "./routes";
import 'vuetify/dist/vuetify.min.css';
import 'vuetify/src/stylus/app.styl';
import '@fortawesome/fontawesome-free/css/all.css'

Vue.use(VueRouter);
Vue.use(VueTify, {iconfont: 'fa'});

let app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
