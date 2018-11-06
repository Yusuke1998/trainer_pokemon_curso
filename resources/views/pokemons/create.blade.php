@extends('../template.template')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<img src="" alt="">
		</div>
		<span class="col-md-3"></span>
		<div class="col-md-6">
			<form action="{{route('pokemons.store')}}" method="POST" enctype="multipart/form-data">
				
				{!!csrf_field()!!}

				<div class="form-group">
				    <label for="name">Nombre del Pokemon:</label>
				    <input type="text" name="name" class="form-control" id="name">
			    </div>
				<div class="form-group">
				    <label for="skill">Habilidades del Pokemon:</label>
				    <select class="form-control" id="skill" name="skill" multiple>
				    	<option value="1">Volar</option>
				    	<option value="2">Electrocutar</option>
				    	<option value="3">Disparar</option>
				    </select>
			    </div>
				<div class="form-group">
					<input type="file" name="image"placeholder="Imagen">
				</div>
				<div class="form-group">
					<button class="btn btn-info form-control" type="submit">Guardar</button>
				</div>
			</form>
		</div>
		<span class="col-md-3"></span>
	</div>
	{{-- <img width="400" src="/pokemon/ella.jpg" alt=""> --}}
@endsection