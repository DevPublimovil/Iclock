<template>
    <div class="empleados">
        <div class="container mx-auto mb-8">
            <div class="w-full py-2 mx-1">
                <p class="text-xs text-red-500 mb-1">Porcentaje de llegadas tardías</p>
                <div class="rounded bg-gray-500">
                    <div class="bg-red-500 rounded text-xs leading-none hover:bg-red-600 cursor-pointer py-1 text-center text-white" :style="{width:porcentage+'%'}">
                        {{porcentage + '%'}}
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-between mx-2">
            <div class="lg:w-4/6 md:w-4/6 sm:w-full w-full">
                <div class="flex w-full justify-between">
                    <div class="table-row">
                        <a href="/acciones/create" class="table-cell button text-xs button-five">Crear acción de personal</a>
                        <span class="union-btn" :class="{'union-btn-active' : period == 'semanal', 'text-white' : period == 'semanal'}" @click="period = 'semanal'">Semanal</span>
                        <span class="union-btn" :class="{'union-btn-active' : period == 'mensual', 'text-white' : period == 'mensual'}" @click="period = 'mensual'">Mensual</span>
                    </div>
                    <input v-model="date" class="shadow appearance-none border border-indigo-400 sm:block hidden rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none text-xs" name="search" id="search" type="search" placeholder="Buscar">
                </div>
                <table class="w-full table-auto rounded border-collapse  border-gray-500 mt-1">
                    <thead>
                        <tr class="border-b border-gray-400 border-t border-gray-400">
                            <th class="px-4 py-2 text-gray-800 ">Día</th>
                            <th class="px-4 py-2 text-gray-800">Entrada</th>
                            <th class="px-4 py-2 text-gray-800">Salida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b border-gray-400" v-for="(item, index) in searchDay" :key="index">
                            <td class="px-4 py-2">{{ item.date }}</td>
                            <td class="px-4 py-2">{{ item.entrada }}</td>
                            <td class="px-4 py-2">{{ item.salida }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="lg:w-2/6 md:w-2/6 w-0 pl-4" id>
                <div class="w-full bg-white rounded overflow-hidden shadow-lg ">
                    <div class="w-full h-50 bg-cover p-2" style="background-image: url('/images/bgprofile.jpg')">
                        <img class="mx-auto w-20 h-20 rounded-full"  :src="'storage/'+user.avatar" id="imageavatar">
                        <p class="font-bold text-white text-center mt-2">
                            {{user.name}}
                        </p>
                    </div>
                    <div class="relative px-4 py-4">
                        <p class="text-gray-700 text-basem mb-2">
                            <strong>Dui: </strong> {{user.employee.dui}}
                        </p>
                        <p class="text-gray-700 text-basem mb-2">
                            <strong>Correo: </strong> {{user.email}}
                        </p>
                        <p class="text-gray-700 text-basem mb-2">
                            <strong>Departamento: </strong> {{user.employee.departament.name_departament}}
                        </p>
                        <p class="text-gray-700 text-basem mb-2">
                            <strong>Puesto: </strong> {{user.employee.puesto}}
                        </p>
                        <p class="text-gray-700 text-basem mb-2">
                            <strong>País: </strong> {{user.country.name}}
                        </p>
                        <p class="flex text-gray-700 text-base justify-end items-end">
                            <a :href="'/users/'+user.id" class="btn-circle">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>
<script>
export default {
    props:['user'],
    data() {
        return {
            marcaciones: [
                {date: 'Lunes - 17/03/2020', entrada: '08:00:00', salida: '05:30:00'},
                {date: 'Martes - 18/03/2020', entrada: '08:00:00', salida: '05:30:00'},
                {date: 'Miércoles - 19/03/2020', entrada: '08:00:00', salida: '05:30:00'},
                {date: 'Jueves - 20/03/2020', entrada: '08:00:00', salida: '05:30:00'},
                {date: 'Viernes - 21/03/2020', entrada: '08:00:00', salida: '05:30:00'},
            ],
            period: 'semanal',
            date: '',
            porcentage: 45,
        }
    },
    computed: {
            searchDay(){
               return this.marcaciones.filter((day) => day.date.toLowerCase().includes(this.date));
            }
    },
    methods: {

    },
    mounted() {

        var horaInicio = moment('8:45am', 'h:mma');
        var horaFin = moment('9:00am', 'h:mma');
        if (horaInicio > horaFin) {
            console.log('ok')
        } // deberá aparecer true
    },
}
</script>