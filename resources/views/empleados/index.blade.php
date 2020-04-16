@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
<div class="container">
	<div class="flex w-11/12 mx-auto">
		<div class="flex-1 text-gray-700 text-left  px-2 py-2 ">
			<p class="left-0 inline-block">Listado de empleados</p>
		</div>
		<div class="flex-1 text-gray-700 text-right  px-4 py-2">Opciones</div>
	</div>
	<section class="w-11/12 mx-auto rounded overflow-hidden shadow-lg bg-white text-xs">
		<div class="px-6 py-4">
			<table id="empleados_table" class="text-center table-auto" style="width:100%">
				<thead>
				<tr>
					<th></th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Fecha de ingreso</th>
					<th>Opcion</th>
				</tr>
				</thead>
			</table>
		</div>
	</section>
</div>
@endsection

@section('scripts')
<script>
	$(document).ready( function () {
		$('#empleados_table').DataTable({
			language: {
				"decimal": "",
				"emptyTable": "No hay información",
				"info": "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
				"infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
				"infoFiltered": "(Filtrado de _MAX_ total Clientes)",
				"infoPostFix": "",
				"thousands": ",",
				"lengthMenu": "Mostrar _MENU_ Clientes",
				"loadingRecords": "Cargando...",
				"processing": "Procesando...",
				"search": "Buscar:",
				"zeroRecords": "No se encontro el cliente",
				"paginate": {
					"first": "Primero",
					"last": "Ultimo",
					"next": "Siguiente",
					"previous": "Anterior"
				}
			},
			responsive: true,

			"processing": true,
			"serverSide": true,
			"ajax": '{{ route('empleados.getempleados') }}',
			"columns": [
			{ "data": "avatar", "orderable": false, "searchable": false },
			{ "data": "name" },
			{ "data": "email" },
			{ "data": "created_at" },
			{ "data": "actions", "orderable": false, "searchable": false},
			]
		});
	} );
</script>
@endsection