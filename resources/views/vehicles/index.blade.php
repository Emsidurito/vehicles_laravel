@extends('plantilla')
@section('content')

    <div>        
        <h2>Vehicles</h2>
    </div>
      @if(Auth::user()->is_admin)    
    <div>
        <a href="{{ route('vehicles.create') }}"> Nou vehicle</a>
    </div>
    @endif  
   
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

       @include('vehicles.search')
    <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nom Vehicle</th>
                <th>Tipus</th> 
                <th>Potencia</th>
                <th>Combustio</th>                         
                <th>Operacions</th>
            </tr>
        </thead>
        
        @foreach ($vehicles as $vehicle)
        
        <tr>
            <td>{{ $vehicle->id }}</td>
            <td>{{ $vehicle->realname }}</td>     
            <td>{{ $vehicle->tipus }}</td>
            <td>{{ $vehicle->potencia }}</td>
            <td>{{ $vehicle->combustio->combustio }}</td>                       
            <td>     
                  <a href="{{ route('vehicles.show',$vehicle->id) }}">Mostrar</a>
                  @if(Auth::user()->is_admin)
                  |                     
                  <a href="{{ route('vehicles.cambiamod',$vehicle->id) }}">Modificacions</a> |       
                  <a href="{{ route('vehicles.edit',$vehicle->id) }}">Editar</a> |
                  <a href="{{ route('vehicles.destroy',$vehicle->id) }}">Esborrar</a>
                      @endif  
            </td>
        </tr>
        @endforeach
    </table>
  
    {{ $vehicles->links('pagination::bootstrap-4') }}
      
@endsection