@extends('index')

@section('content')

@include('ingreso.modalEditarDetalle')


@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('mensaje') }}
</div>
@endif


<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">Ventas Sucursal</div>
				<div class="panel-body">
					



<!--recuperamos el valor del campo para luego leerlo en el script y hacer la consulta ajax-->
<button id="ingreso" style="visibility:hidden">{{$CodIngreso}}</button>



<table id="Tdetalles" class="table table-hover">
	<thead>
		<th>ID</th>
		<th>PRODUCTO</th>
		<th>CANTIDAD</th>
		<th>PESO</th>
		<th>PRECIO</th>
		<th>INGRESO</th>
		<th>OPERACIONES</th>
		
	</thead>

		<tbody id="datos-detalles">
		
	@section('scripts')
	
		<script src="{{asset('js/script-lista-detalles-i.js')}}"></script>
		
	@stop	


		</tbody>

</table>

</div>
</div>
</div>
</div>
</div>
@stop