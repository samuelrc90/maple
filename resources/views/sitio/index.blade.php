@extends('layouts.layout')
@section('content');
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Sitios</h3> <span class=""> </span></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{route('sitio.create')}}" class="btn btn-info" >Añadir Sitio</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="display table table-bordered table-striped">
             <thead>
               <th>ID</th>
               <th>Tipo</th>
               <th>Nombre</th>
               <th>Categoria</th>
               <th>Importe</th>
               <th>Estado</th>
               <th>Editar</th> 
               <th>Eliminar</th>              
            </thead>
             <tbody>
               @if($sitios->count())
                  @foreach($sitios as $sitio)               
                    <tr>
                      <td>{{$sitio->id}}</td>              
                      <td>{{$sitio->Tipo}}</td>
                      <td>{{$sitio->Nombre}}</td>
                      <td>{{$sitio->Categoria}}</td>
                      <td>{{$sitio->Importe}}</td>
                      <td>{{$sitio->Estado}}</td>
                      <td>
                          <a class="btn btn-primary btn-xs" href="{{action('SitioController@edit', $sitio->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td><td>
                            <form action="{{action('SitioController@destroy', $sitio->id)}}" method="post"> 
                               {{csrf_field()}}                  
                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                      </td>
                    </tr>
                  @endforeach
               @else
                    <tr>
                      <td colspan="8" align="center">No hay registro !!</td>
                    </tr>
              @endif
              
            </tbody>
 
          </table>

        </div>
      </div>
    
    </div>
  </div>
</section>
@endsection
 