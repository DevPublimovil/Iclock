<template>
    <div class="menu">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar bg-indigo-900 text-white elevation-4">
            <!-- Brand Logo -->
            <a href="/home" class="brand-link">
            <img :src="'/images/reloj.png'" alt="Logo" class="brand-image rounded-full"
                style="opacity: .8">
            <span class="brand-text font-weight-light">ICLOCK</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item rounded w-full mx-auto h-10 hover:bg-gray-700">
                        <a href="/home" class="nav-link">
                        <i class="text-white nav-icon fa fa-home"></i>
                        <p class="text-white">
                            Home
                        </p>
                        </a>
                    </li>
                    <li class="nav-item rounded w-full mx-auto h-10 hover:bg-gray-700">
                        <a href="/acciones" class="nav-link">
                        <i class="text-white nav-icon fa fa-history"></i>
                        <p class="text-white">
                            Historial
                        </p>
                        </a>
                    </li>
                    <li class="nav-item rounded w-full mx-auto h-10 hover:bg-gray-700">
                        <a href="/empleados" class="nav-link">
                        <i class="text-white nav-icon fa fa-users"></i>
                        <p class="text-white">
                            Empleados
                        </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>
</template>