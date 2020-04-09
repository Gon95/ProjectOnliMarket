@extends('layouts.layoutArticulos')

@section('contenido')
<div class="container bg-warning py-3">
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left font-weight-bold">
			<h1>Actualizar Articulo</h1>
			<form action="{{ route('articulos.update', $articulos->id) }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				
				<div class="form-group">
					Nombre
					<input type="text" class="form-control" name="nombre" value="{{$articulos->nombre}}">
				</div>
                <div class="form-group">
					IMAGEN
					<input type="file" class="form-control" name="imagen" accept=".jpg, .jpeg, .png" value="{{$articulos->imagen}}">
				</div>
				<div class="form-group">
					Precio
					<input type="text" class="form-control" name="precio" value="{{$articulos->precio}}">
				</div>
				<div class="form-group">
					Unidad
					<input type="text" class="form-control" name="unidad" value="{{$articulos->unidad}}">
				</div>
				<div class="form-group">
					Stock
					<input type="text" class="form-control" name="stock" value="{{$articulos->stock}}">
				</div>
                <div class="form-group">
					Descripcion
					<input type="text" class="form-control" name="descripcion" value="{{$articulos->descripcion}}">
				</div>
				<button type="submit" class="baves-effect waves-light btn red darken-4">Aceptar</button>
			</form>
		</div>
	</div>
</div>
@endsection