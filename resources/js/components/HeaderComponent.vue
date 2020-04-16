<template>
    <div class="header">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- navbar left items -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li>
                    <button @click="isOpen = !isOpen" class="block h-8 w-8 rounded-full overflow-hidden border-2 border-gray-600 focus:outline-none focus:border-white">
                        <img class="h-full w-full object-cover"  :src="'/storage/'+avatar" alt="username">
                    </button>
                     <button v-if="isOpen" @click="isOpen = false" tabindex="-1" class="fixed inset-0 h-full w-full bg-white opacity-50 cursor-default"></button>
                    <div v-if="isOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
                        <a @click="logout()" href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Sign out</a>
                    </div>
                </li>
            </ul>
        </nav>
        <form action="/logout" method="post" style="display:none" id="form-logout">
            <input type="hidden" name="_token" :value="csrf">
        </form>
    </div>
</template>

<script>
export default {
    props:['avatar'],
    data(){
        return{
            isOpen: false,
            csrf: '',
        }
    },
    methods: {
        logout(){
            event.preventDefault()
            document.getElementById('form-logout').submit()
        },
    },
    created() {
        this.csrf = document.querySelector('meta[name="csrf-token"]').content
    }
}
</script>