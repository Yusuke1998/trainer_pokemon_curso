@extends('../template.template')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<img src="" alt="">
		</div>
		<span class="col-md-3"></span>
		<div class="col-md-6">
			<form action="{{route('trainers.store')}}" method="POST" enctype="multipart/form-data">
				{!!csrf_field()!!}

				<div class="form-group">
				    <label for="name">Nombre del Pokemon:</label>
				    <input type="text" class="form-control" id="name">
			    </div>
			    <div class="form-group">
				    <label for="age">Edad del pokemon:</label>
				    <input type="number" class="form-control" id="age">
			    </div>
				<div class="form-group">
				    <label for="poke">Habilidades del Pokemon:</label>
				    <select class="form-control" id="poke" name="poke" multiple>
				    	<option value="">Volar</option>
				    	<option value="">Electrocutar</option>
				    	<option value="">Disparar</option>
				    </select>
			    </div>
				<div class="form-group">
					<input type="file" name="imagen"placeholder="Imagen">
				</div>
			</form>
		</div>
		<span class="col-md-3"></span>
	</div>
@endsection