@extends('plantilla')
@section('content')
<div>
	<a href="{{ route('marcas.index') }}"> Tornar</a>
</div>          
<div> 
	@if ($errors->any())
	<ul>
	    @foreach ($errors->all() as $error)
	    	<li>{{ $error }}</li>
	    @endforeach
	</ul>        
        @endif
</div>
<div>
	 <h1>Editar marca {{$marca->name }}</h1>
	<form action="{{ route('marcas.update',$marca->id) }}" method="POST">
	    @csrf

	    <strong>Name:</strong>
	    <input type="text" name="name" value="{{ old('name',$marca->name) }}">
	            
	    <input type="submit" value="Actualitzar">            
	   
</form>
</div>
@endsection