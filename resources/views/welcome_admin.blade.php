@extends('template/template')
@section('title') Trainer Pokemon @endsection
@section('content')
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
    			<a href="#" class="btn btn-info float-right">Nuevo</a>
    		</div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Borrar</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection