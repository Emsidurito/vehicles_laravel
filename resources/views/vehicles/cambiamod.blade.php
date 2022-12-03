@extends('plantilla')
@section('content')
<div>
	  <h1>Modificacions del vehicle {{$vehicle->realname }}</h1>
    
	<table class="table">
		 <thead>
		 <tr>
            <th>Nom </th>
            <th>Accions</th> 
         </tr>
         </thead>
         <tbody>
            @foreach ($vehiclemods as $mod)
            
         <tr> 
            <td>{{$mod->description}}</td>
           <td>

                <a href="{{route('vehicles.borrarmod',[$vehicle->id, $mod->id])}}" role="button" class="btn btn-dark">Borrar</a>
                {{--<a href="{{route('vehicles.borrarmod2',[$mod>id, $mod->id])}}" role="button" class="btn btn-dark">Borrar pifia</a>--}}
            </td> 
         </tr>
         @endforeach
         
        </tbody>

     </table>
     
     <div>
        <form method="get" action="{{ route('vehicles.afegirmod',[$vehicle->id])}}">
        <select name="modificacio" class="select">
        @foreach ($modificacions as $modificacio)
        <option value="{{$modificacio->id}}">{{$modificacio->description}}</option>
        @endforeach
        </select>
        <button type="submit" class="btn btn-dark">Afegir modificacio</button>
    </form>
     </div> 
@endsection