<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca; // Afegir la classe Model!!!!!!!!!!!!!!!!!!!

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function index()
     {
         //
        // Recuperem una col·lecció amb 
        // les marces de la BD paginats de 10 en 10
        $marcas = Marca::Paginate (10);

        // Carreguem la vista marcas/index.blade.php 
        // i li passem la llista de marcas
        return view('marcas.index',compact('marcas'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        // Obtenim un objecte Marca a partir del seu id
        $marca = Marca::findOrFail($id);
        // carreguem la vista i li passem la marca que volem visualitzar
        return view('marcas.show',compact('marca'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("marcas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
        'name' => 'required|unique:marcas|min:2|max:20', 
 ]);
        Marca::create($request->all());
     
        return redirect()->route('marcas.index')
                        ->with('success','Marca afegida al mercat.');       
   
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $marca = Marca::findOrFail($id);
        return view('marcas.edit',compact('marca'));
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
            'name' => 'required|min:5|max:15|unique:marcas'],  
            [
                'name.required' => 'Posa el nom',
                'name.min' => 'Massa llarg!',
                'name.unique'=> 'Repetit!',
            ]          
        );
    
        // Opcio 1
        $marca = Marca::findOrFail($id);
        $marca->update($request->all());

        // Opcio 2
        // $marca->name = $request->name;
        // $marca->save();
    
        return redirect()->route('marcas.index')
                        ->with('success','Marca actualitzada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
        //  Obtenim la marca que volem esborrar
        $marca = Marca::findOrFail($id);
        // intentem esborrar-lo, En cas que un vehicle tingui aquesta marca assignat
        // es produiria un error en l'esborrat!!!!
        try {
            $result = $marca->delete();
            
        }
        catch(\Illuminate\Database\QueryException $e) {
             return redirect()->route('marcas.index')
                        ->with('error','Error esborrant la marca');
        }   
        return redirect()->route('marcas.index')
                        ->with('success','Marca esborrada correctament.');    
    }
}
