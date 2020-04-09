@extends('layouts.layoutArticulos')

@section('contenido')
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center font-weight-bold">
			<div class="card bg-warning px-5" >
				<p class="h1 text-center">Mostrar Articulo</p>
				<img src="{{asset("storage/$articulos->imagen")}}" alt="No disponible" class="card-img-top" style="width: 15rem; margin: auto;"><br>
					Nombre: {{ $articulos->nombre }}<br><br>
					Precio: {{ $articulos->precio }}<br><br>
					Unidad: {{ $articulos->unidad }}<br><br>
					Stock: {{ $articulos->stock }}<br><br>
					Descripcion: {{ $articulos->descripcion }}<br><br>
			</div>
			<button onclick="location.href='{{ url('articulos')}}'" class="aves-effect waves-light btn red darken-4">Volver</button>
		</div>
	</div>
@endsection