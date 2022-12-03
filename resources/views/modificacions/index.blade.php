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
        <a href="{{ url('/modificacions/create') }}">Nova modificacio</a>
    </div>
@endif
    <div>
        <h3>Modificacions</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>           
                    <th>Operacions</th>
                    </tr>
            </thead>

                <tbody>
                @foreach ($modificacio as $modificacions)
                <tr>
                    <td>{{ $modificacions->id }}</td>
                    <td>{{ $modificacions->description }}</td>
                   
                    <td>                
                       <a href="{{ route('modificacions.show',$modificacions->id) }}">Mostrar</a> 
                    
                         @if(Auth::user()->is_admin)  
                                
                       <a href="{{ route('modificacions.destroy',$modificacions->id) }}">Esborrar</a> 
                    
                                
                       <a href="{{ route('modificacions.edit',$modificacions->id) }}">Actualitzar</a> 
                       @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>

    <div>
     {{ $modificacio->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection