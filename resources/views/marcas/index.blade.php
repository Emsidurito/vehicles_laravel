@extends('plantilla')
@section('content')

<div class="container">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>            
    @endif

    @if (session('error'))
        <div class="alert alert-danger">            
            {{ session('error') }}            
        </div>            
    @endif

@if(Auth::user()->is_admin) 
    <div>
        <a href="{{ url('/marcas/create') }}">Nova marca</a>
    </div>
 @endif 
    <div>
        <h3>Marcas</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>           
                    <th>Operacions</th>
                    </tr>
            </thead>

                <tbody>
                @foreach ($marcas as $marca)
                <tr>
                    <td>{{ $marca->id }}</td>
                    <td>{{ $marca->name }}</td>
                   
                    <td>                
                       <a href="{{ route('marcas.show',$marca->id) }}">Mostrar</a> 
                    
                         @if(Auth::user()->is_admin)      
                       <a href="{{ route('marcas.destroy',$marca->id) }}">Esborrar</a> 
                    
                                
                       <a href="{{ route('marcas.edit',$marca->id) }}">Actualitzar</a> 
                       @endif  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>

    <div>
     {{ $marcas->links('pagination::bootstrap-4') }}
    </div>
</div>


</body>
</html>
@endsection