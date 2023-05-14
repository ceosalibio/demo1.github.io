require('./bootstrap');
require('./dialog_movable');
import Vue from 'vue'
import Vuetify from 'vuetify'
import Router from './router'
import store from './store'
 import App from './template/App';
// import Sample from './template/Sample';

import SocketIO from 'socket.io-client'
import VueSocketIO from 'vue-socket.io'

// Vue.use(new VueSocketIO({
//     debug: false,
//     connection: SocketIO('http://10.169.140.58:9191'), //options object is Optional
//     vuex: {
//         store,
//         actionPrefix: "SOCKET_",
//         mutationPrefix: "SOCKET_"
//     }
// })
// );

Vue.use(Vuetify)

new Vue({
    el: '#app',
    store,
    router:Router,
    vuetify: new Vuetify(),
    // components : {
    //     App,
    //     Sample
    // }
     render: h=>h(App)
});