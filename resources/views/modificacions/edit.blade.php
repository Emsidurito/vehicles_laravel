@extends('plantilla')
@section('content')
<div>
	<a href="{{ route('modificacions.index') }}"> Tornar</a>
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
	<h1>Editar modificacio {{$modificacio->description }}</h1>
	<form action="{{ route('modificacions.update',$modificacio->id) }}" method="POST">
	    @csrf

	    <strong>Nom:</strong>
	    <input type="text" name="description" value="{{ $modificacio->description }}">
	            
	    <input type="submit" value="Actualitzar">            
	   
	</form>
</div>
@endsection