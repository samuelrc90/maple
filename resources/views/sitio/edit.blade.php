@extends('layouts.layout')
@section('content');
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Libro</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('sitio.update',$sitio->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id" id="id" class="form-control input-sm" value="{{$sitio->id}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										
										<select class="form-control input-sm" name="Tipo" id="Tipo">
											<option>Tipo</option>
											<option value="MOVIL" {{ old('Tipo', $sitio->Tipo) == 'MOVIL' ? 'selected' : ''}}>Movil</option>
											<option value="FIJA"  {{ old('Tipo', $sitio->Tipo) == 'FIJA' ? 'selected' : ''}}>Fija</option>
										</select>
									</div>
								</div>
							</div>
 
							<div class="form-group">
								<textarea name="Nombre" class="form-control input-sm"  placeholder="Resumen">{{$sitio->Nombre}}</textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										 <select class="form-control input-sm" name="Categoria" id="Categoria" data-live-search="true">
											<option value="">Categoria</option>
											<option value="A+"{{ old('Categoria', $sitio->Categoria) == 'A+' ? 'selected' : ''}}>A+</option>
											<option value="A" {{ old('Categoria', $sitio->Categoria) == 'A' ? 'selected' : ''}}>A</option>
											<option value="B" {{ old('Categoria', $sitio->Categoria) == 'B' ? 'selected' : ''}}>B</option>
											<option value="C" {{ old('Categoria', $sitio->Categoria) == 'C' ? 'selected' : ''}}>C</option>
											<option value="D" {{ old('Categoria', $sitio->Categoria) == 'D' ? 'selected' : ''}}>D</option>
											<option value="E" {{ old('Categoria', $sitio->Categoria) == 'E' ? 'selected' : ''}}>E</option>
										</select>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Importe" id="Importe" class="form-control input-sm" value="{{$sitio->Importe}}">
									</div>
								</div>
							</div>
							
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('sitio.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
@endsection
