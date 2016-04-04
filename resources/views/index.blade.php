@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')
			<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Sistema de Seguimiento y Control</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>¡Bienvenido a SISEC AdminPanel! </h4>
					</div>
					<div class="login-body">
						{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
							<div class="form-group">
								{!!Form::label('correo','Correo:')!!}	
								{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
							</div>
							<div class="form-group">
								{!!Form::label('contrasena','Contraseña:')!!}	
								{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
							</div>
						{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
						{!!Form::close()!!}
						<form>
							
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Recordar sesión</label>
								<div class="forgot">
									<a href="#">¿Olvido su contraseña?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
				
				
			</div>
		</div>
		
	@endsection	