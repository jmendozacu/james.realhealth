@extends('layouts.Master')

@section('title') Assign Workout @stop

@section('head')
<script>
$(document).ready(function() {
    $("#basicDataTable").DataTable({
        "order": [],
    });
});
</script>
@stop

@section('body')
<div class="container">
	<div class="row">
		<section class="tile">	
		<h1>User List</h1>
			<div class="tile-body nopadding color greensea">
			<div class="table-responsive">
			<table class = "table table-datatable table-bordered" id="basicDataTable">
				<thead>
			           <tr>
			             <th scope="sort-alpha">Username</th>
			             <th scope="sort-alpha">Email</th>
			             <th scope="sort-alpha">Type</th>
			             <th scope="sort-alpha">Actions</th>
			           </tr>
			    </thead>
			    <tbody>
			    <!-- Se recorre la variable que se envio desde el controlador y se va imprimiendo cada uno de los campos que necesitamos  -->
			     @foreach($usuarios as $usuario)
			           <tr class="odd gradeX">
			             <td>{{$usuario->username}}</td>
			             <td>{{$usuario->email}}</td>
			             <td>{{$usuario->rol->Rol}}</td>
			             <td>
			              <!-- Todos los id se envian mediante un link que nos lleva a otra ruta... la ruta esta previamente definida y esta vinculada con un metodo, el metodo es el que va a recibir el id y posteriormente se manipulara para los fines que se deseen-->
			             <a href="{{ url('assign/workout', base64_encode($usuario->id)) }}" class="btn btn-success">Assign Workouts</a>
			             <a href="{{ url('view/workout', base64_encode($usuario->id)) }}" class="btn btn-warning">View Workouts</a>
			             </td>
			           </tr>
			      @endforeach  
			    </tbody> 
			</table>
			</div>	    
		    </div>
		</section>	
	</div>
</div>

@stop