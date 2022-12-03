@extends('plantilla')
@section('content')
<div>
	<a href="{{ route('marcas.index') }}"> Tornar</a>
</div>

<div>   
		<form action="{{ route('marcas.store') }}" method="POST">
	    @csrf
	       
	    <strong>Name:</strong>
	    <input type="text" name="name" value="{{ old('name') }}">
	            
	    <input type="submit" value="desar">     
	   
</form>

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
@endsection