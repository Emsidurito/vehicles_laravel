@extends('plantilla')
@section('content')
<div>
    <a href="{{ route('vehicles.index') }}"> Tornar</a>
</div>
<div>
    <h2>Afegir Nou Vehicle</h2>
</div>
    
   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<div>
<form action="{{ route('vehicles.store') }}" method="POST">
  @csrf
    <div>
        <strong>Nom del vehicle:</strong>
        <input type="text" name="realname" value="">
    </div>
               
    <div>
        <strong>Tipus:</strong>

<select name="tipus">
            <option value="Cotxe">Cotxe</option>
            <option value="Moto">Moto</option>
</select>
    </div>   
    <div>           
        <strong>Marca:</strong>
<select name="marca_id">
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->name }}</option>        
            @endforeach            
</select>
</div>
<div>
        <strong>Potència:</strong>

            <input type="number" name="potencia" min="0" max="10000">

       
           
    </div>
     <div>           
        <strong>Combustió:</strong>
<select name="combustio_id">
            @foreach($combustions as $combustio)
                <option value="{{ $combustio->id }}">{{ $combustio->combustio }}</option>        
            @endforeach            
</select>
</div>  
    <div>
        <input type="submit" value="Desar">
    </div>
    
</form>
</div>
@endsection