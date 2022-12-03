<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modificacio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ModificacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   
        DB::table('modificacions')->insert([

 
            ['description'=>'Super acceleracio'],
			['description'=>'Suspencio millorada'],
			['description'=>'Alero futurista'],
			['description'=>'Tracció total'],
			['description'=>'Autopilot'],
			['description'=>'Plaques de titani'], 
			['description'=>'Supercontrolador ia'],
			['description'=>'Aerodinamica +'],
			['description'=>'Rodes de neu'],
			['description'=>'Vidres tintats'],
			['description'=>'Llums xenon'],
			['description'=>'Movilitat acuatica'],
			['description'=>'Mod.martimcfly'],
			['description'=>'Rodes antipunxada'],
			['description'=>'Frenada regenerativa'],
			['description'=>'Doble motor'],
			['description'=>'Camara per aparcar'],
			['description'=>'Frens deportius'],
			['description'=>'Transmisio PRO'],
			['description'=>'Neons'],
			['description'=>'Faldons platejats'],


		
		]);

	

    }
}
