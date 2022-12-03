<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class VehicleModificacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 1,
            'modificacio_id' => 1        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 1,
            'modificacio_id' => 2        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 1,
            'modificacio_id' => 3        
        ]);

        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 2,
            'modificacio_id' => 4        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 2,
            'modificacio_id' => 5        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 2,
            'modificacio_id' => 6        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 3,
            'modificacio_id' => 7        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 3,
            'modificacio_id' => 8        
        ]);DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 3,
            'modificacio_id' => 9
        ]);        
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 4,
            'modificacio_id' => 10        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 4,
            'modificacio_id' => 11        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 4,
            'modificacio_id' => 12        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 5,
            'modificacio_id' => 13        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 5,
            'modificacio_id' => 14        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 5,
            'modificacio_id' => 15        
        ]);

        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 6,
            'modificacio_id' => 16        
        ]);

        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 6,
            'modificacio_id' => 17        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 6,
            'modificacio_id' => 18        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 7,
            'modificacio_id' => 19        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 7,
            'modificacio_id' => 20        
        ]);
        DB::table('vehicles_modificacions')->insert([
            'vehicle_id' => 7,
            'modificacio_id' => 21        
        ]);
        
        

    }
}