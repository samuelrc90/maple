@extends('layouts.layout')
@section('content');
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Error!</strong> Revise los campos obligatorios.<br><br>
					<ul>
						<li></li>
						
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
					<h3 class="panel-title">Sitio</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('sitio.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-2">
									<div class="form-group">
										<input type="text" name="id" id="id" class="form-control input-sm" placeholder="ID">					
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-2">
									<div class="form-group">
										<select class="form-control input-sm" name="Tipo" id="Tipo">
											<option>Tipo</option>
											<option value="MOVIL">Movil</option>
											<option value="FIJA">Fija</option>
										</select>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Nombre" id="Nombre" class="form-control input-sm" placeholder="Nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-2">
									<div class="form-group">
										<select class="form-control input-sm" name="Categoria" id="Categoria">
											<option>Categoria</option>
											<option value="A+">A+</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
											<option value="E">E</option>
										</select>
									</div>
								</div>
							</div>
 
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Importe" id="Importe" class="form-control input-sm" placeholder="Importe">
									</div>
								</div>
							</div>
							
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
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