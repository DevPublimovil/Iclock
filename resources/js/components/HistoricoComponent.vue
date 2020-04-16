<template>
    <div class="hitorico">
        <div class="container py-4">
        <div class="flex justify-between w-11/12 mx-auto mb-2">
            <div>
                <h2 class="font-bold text-xl">Historial de acciones de personal</h2>
            </div>
            <div>
                <input type="search" class="form-input text-xs mr-3" placeholder="Buscar">
            </div>
        </div>
        <div class="w-11/12  mx-auto">
            <div class="timeline relative p-0">
                <div v-for="(action, index) in actions" :key="index">
                    <div class="time-label">
                        <span class="text-white shadow-none bg-red-500 inline-block font-bold p-1 rounded">{{action.created_at}}</span>
                    </div>
                    <div>
                        <div class="timeline-item shadow-lg rounded bg-white text-gray-600 ml-16 p-0 mt-0 relative">
                            <span class="time text-gray-500 text-xs p-3 float-right">
                                <i class="fa fa-clock-o"></i> {{action.hora}}</span>
                            <h3 class="timeline-header border-b border-gray-500 text-gray-800 leading-loose p-1 m-0">Acción de personal</h3>
        
                            <div class="timeline-body p-2">
                            <p><strong>Motivo: </strong> {{action.items}}</p>
                            <p><strong>Descripción: </strong>{{action.description}}</p>
                            </div>
                            <div class="timeline-footer p-2">
                            <a :href="'/acciones/'+action.id" target="_blank" class="button button-one">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            actions: []
        }
    },
    methods: {
        getHistorico(){
            let vm = this
            axios.get('/getactions').then(({data})=>{
                vm.actions = data.data
            })
        }
    },
    mounted() {
        this.getHistorico();
    },
}
</script>