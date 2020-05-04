import Vue from 'vue'
import VueRouter from 'vue-router'
import MarcacionComponent from './components/MarcacionComponent'
import HistoricoComponent from './components/HistoricoComponent'
Vue.use(VueRouter)

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/home',
            name: 'home',
            component: MarcacionComponent
        },
        {
            path: '/historico',
            name: 'historico',
            component: HistoricoComponent
        }
    ]
});

export default router;