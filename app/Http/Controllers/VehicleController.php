<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Modificacio; // Afegir la classe Model!!!!!!!!!!!!!!!!!!!
use App\Models\Marca;
use App\Models\Combustio;
use App\Models\Actions;
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function index(Request $request)
    {
        // $filters serà un array de la forma ['searchName'=>'C4','searchTipus=>'Cotxe']

        $filters = $request->all('searchName', 'searchTipus');

        
        // Preparo una consulta sobre el model Vehicle, indicant que voldrè carregar també els 
        // models Marca associats, per evitar el problema N+1
        $query = Vehicle::with('marca');
        
        // o bé podríem haver fet, si iniciem una consulta sense cap mètode inicial
        // $query = Vehicle::Query();

        // Si s'ha enviat el paràmetre searchName
        if ($request->has('searchName')) {
          $query->where('realname','like','%'.$filters['searchName'].'%');
        }

        // Si s'ha enviat el pàrametre i té valor
        if ($request->filled('searchTipus')) {
            $query->where('tipus',$filters['searchTipus']);
        }

   

        
        $vehicles = $query->paginate(5)->withQueryString();
        // El withQueryString serveix per a que al paginar s'afegeixin també els paràmetres GET 
        // que hi ha en la crida a la URL actual. En aquest exemple ?searchName=valor$searchTipus=valor
        
        return view('vehicles.index',compact('vehicles','filters'));
           
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Recuperem la col·lecció de marcas
        $marcas = Marca::all();
        $vehicle = Vehicle::all();
        $combustions = Combustio::all();   
        return view('vehicles.create',compact('vehicle','marcas','combustions'));
    }

	public function store(Request $request)
    {
        //
        $request->validate([
            'realname' => 'required | max:25 |unique:vehicles',         
            'tipus' => 'required | in:Cotxe,Moto',
            'marca_id' => 'required|exists:marcas,id',
            'potencia' => 'required|min:0 | max:100000',           
        ]);
    
        Vehicle::create($request->all());
     
        return redirect()->route('vehicles.index')
                        ->with('success','Nou vehicle al garatge!.');
    }  

		public function show(Vehicle $vehicle, Actions $actions)
			{
        // Tenim un vehicle, carreguem les modificacions associades!     
        $vehicle->load("modificacions");
       
        // dd($vehicle);
        
        return view('vehicles.show',compact('vehicle'));
}		
 	public function edit($id)
    {
        //
      
        $vehicle = vehicle::findOrFail($id);
        $marcas = Marca::all();
        $combustions = Combustio::all();
        return view('vehicles.edit',compact('vehicle','marcas','combustions'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        //
        $request->validate([
           'realname' => 'required | max:25',
            'tipus' => 'required | in:Cotxe,Moto',
            'potencia' => 'required|min:0 | max:100000',
         
                       
        ]);
    
        // Opcio 1
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());

        // Opcio 2
        // $marca->name = $request->name;
        // $marca->save();
    
        return redirect()->route('vehicles.index')
                        ->with('success','Modificacions compatibles y afegides!');
    }
     public function destroy($id)
        {
        //  Obtenim el vehicle que volem esborrar
        $vehicle = Vehicle::findOrFail($id);
        // intentem esborrar-lo, En cas que un vehicle tingui aquesta marca assignat
        // es produiria un error en l'esborrat!!!!
        try {
            $result = $vehicle->delete();
            
        }
        catch(\Illuminate\Database\QueryException $e) {
             return redirect()->route('vehicles.index')
                        ->with('error','Error expulsant el vehicle');
        }   
        return redirect()->route('vehicles.index')
                        ->with('success','Vehicle expulsat correctament.');    
    }
     public function search()
    {
       
        $marcas = Marca::all();
        $vehicle = Vehicle::all();   
        return view('vehicles.search',compact('vehicle','marcas'));
    }
 public function cambiamods(Vehicle $vehicle)
    {
       
        $modificacions= Modificacio::all();
        $vehicle->load("modificacions");        
        $vehiclemods = $vehicle->modificacions;
    
        return view('vehicles.cambiamod',compact('vehicle','vehiclemods','modificacions'));
    }
    
    public function borrarmod(Vehicle $vehicle, Modificacio $modificacio)
    {       
                       
        $res = $vehicle->modificacions()->detach($modificacio);
   
       return redirect()->route('vehicles.cambiamod', [$vehicle->id]); 
    }
    public function afegirmod(Vehicle $vehicle, Request $request)
    {
        $request->validate([
           'modificacio' => 'required | numeric',           
        ]);

        
        $modificacio = Modificacio::find($request->get('modificacio'));
        $vehicle->modificacions()->attach($modificacio);
         
   
        return redirect()->route('vehicles.cambiamod', [$vehicle->id]); 
    }

}
