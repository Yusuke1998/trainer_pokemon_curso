@extends('../template.template')
@section('content')
	<div class="row">
		<span class="col-md-3"></span>
		<div class="col-md-6">
			<form action="{{route('trainers.store')}}" method="POST">
				{!!csrf_field()!!}

				<div class="form-group">
				    <label for="name">Nombre del Entrenador:</label>
				    <input type="text" class="form-control" id="name">
			    </div>
			    <div class="form-group">
				    <label for="age">Edad del Entrenador:</label>
				    <input type="number" class="form-control" id="age">
			    </div>
				<div class="form-group">
				    <label for="poke">Pokemon Favorito: (maximo 3)</label>
				    <select class="form-control" id="poke" name="poke" multiple>
				    	<option value="">Pikachu</option>
				    	<option value="">Bulbazor</option>
				    	<option value="">Charizard</option>
				    </select>
			    </div>
			</form>
		</div>
		<span class="col-md-3"></span>
	</div>
@endsection