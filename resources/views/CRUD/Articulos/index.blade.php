@extends('Layouts.layoutArticulos')
@section('contenido')
<div class="card-panel pink darken-4">
    <nav class="nav-extended grey">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo"><i class="material-icons">cloud</i>LOGOTIPO</a>
        
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
            <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
            <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
            </ul>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons right">more_vert</i></a></li>
        </ul>
        </div>
        <div class="nav-content">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#test1">Articulo Masculino</a></li>
            <li class="tab"><a class="active" href="#test2">Articulo Femenino</a></li>
            <li class="tab"><a href="#test3">Articulo Infantil</a></li>
            <li class="tab"><a href="#test4">Alquiler</a></li>
        </ul>
        </div>
        <form>
            <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            </div>
        </form>
    </nav>
    <div class="panel-heading">
        <h2 class="grey-text">Articulos</h2>
    </div>
    <div class="row">
    <table class="highlight centered responsive-table">
        <thead>
            <tr>
                <th class="grey-text">ID</th>
                <th class="grey-text">Nombre</th>
                <th class="grey-text">Imagen</th>
                <th class="grey-text">Precio</th>
                <th class="grey-text">Unidad</th>
                <th class="grey-text">Stock</th>
                <th class="grey-text">Descripcion</th>
            </tr>
        </thead>
        <tbody>         
            @foreach($articulos as $articulo)
                <tr>
                    <td class="grey-text">{!! $articulo->id !!}</td>
                    <td class="grey-text">{!! $articulo->Nombre !!}</td>
                    <td class="grey-text">{!! $articulo->Imagen !!}</td>
                    <td class="grey-text">{!! $articulo->Precio !!}</td>
                    <td class="grey-text">{!! $articulo->Unidad !!}</td>
                    <td class="grey-text">{!! $articulo->Stock ? 'En Stock' : 'Fuera de Stock'!!}</td>
                    <td class="grey-text">{!! $articulo->Descripcion !!}</td>
                </tr>
            @endforeach   
        </tbody>
    </table>
    </div>
    <footer class="page-footer grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Informacion de la empresa</h5>
                <p class="grey-text text-lighten-4">Soporte tecnico de la empresa</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">FAQ</h5>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Saber mas</a>
            </div>
          </div>
        </footer>
</div>
@endsection