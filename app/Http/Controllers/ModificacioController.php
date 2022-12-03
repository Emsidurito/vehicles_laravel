<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modificacio; // Afegir la classe Model!!!!!!!!!!!!!!!!!!!

class ModificacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
     {

        $modificacio = Modificacio::Paginate(10);

        return view('modificacions.index',compact('modificacio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("modificacions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        // Validació dels camps
        $request->validate([
            'description' => 'required',            
        ]);
    
        Modificacio::create($request->all());
     
        return redirect()->route('modificacions.index')
                        ->with('success','Modificacio creada correctament.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $modificacio = Modificacio::findOrFail($id);
         return view('modificacions.show',compact('modificacio'));
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
        $modificacio = Modificacio::findOrFail($id);
        return view('modificacions.edit',compact('modificacio'));
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
            'description' => 'required',           
        ]);
    
        $modificacio = Modificacio::findOrFail($id);
        $modificacio->update($request->all());


    
        return redirect()->route('modificacions.index')
                        ->with('success','Modificacio actualitzada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
           $modificacio = Modificacio::findOrFail($id);
       
        try {
            $result = $modificacio->delete();
            
        }
        catch(\Illuminate\Database\QueryException $e) {
             return redirect()->route('modificacions.index')
                        ->with('error','Error esborrant la modificacio');
        }   
        return redirect()->route('modificacions.index')
                        ->with('success','Modificacio esborrada correctament.');    
    }
}
