@extends('layouts.layoutArticulos')

@section('contenido')
<div class="container bg-warning py-3">
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left font-weight-bold">
			
			<h1>AÑADIR NUEVO ARTICULO</h1>
			<form action="{{ url('articulos') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					Nombre<input type="text" class="form-control" name="nombre">
				</div>
				<div class="form-group">
					Imagen<input type="file" class="form-control" accept=".jpg, .jpeg, .png" name="imagen">
				</div>
				<div class="form-group">
					Precio<input type="text" class="form-control" name="precio">
				</div>
				<div class="form-group">
					Unidad<input type="text" class="form-control" name="unidad">
				</div>
				<div class="form-group">
					Stock<input type="text" class="form-control" name="stock">
				</div>
				<div class="form-group">
					Descripcion<input type="text" class="form-control" name="descripcion">
				</div>
				
				<button type="submit" class="aves-effect waves-light btn red darken-4">Aceptar</button>
				
			</form>
		</div>
	</div>
</div>
@endsection