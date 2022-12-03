<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Vehicle
;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $vehicles = [
            [                
                'realname' => 'C4',
                'tipus' => 'cotxe',
                'potencia'=> 90,
                'marca_id' => 1,
                'combustio_id' => 1,
            ],
            [                
                'realname' => 'Ninja',
                'tipus' => 'moto',
                'potencia'=> 120,
                'marca_id' => 3,
                'combustio_id' => 4,
            ],
            [                
                'realname' => 'Focus',
                'tipus' => 'cotxe',
                'potencia'=> 150,
                'marca_id' => 10,
                'combustio_id' => 4,
            ],
            [                
                'realname' => 'GoldWing',
                'tipus' => 'moto',
                'potencia'=> 80,
                'marca_id' => 6,
                'combustio_id' => 2,
            ],
            [                
                'realname' => 'ModelS',
                'tipus' => 'cotxe',
                'potencia'=> 120,
                'marca_id' => 5,
                'combustio_id' => 3,
            ],
            [                
                'realname' => 'Avensis',
                'tipus' => 'cotxe',
                'potencia'=> 110,
                'marca_id' => 2,
                'combustio_id' => 1,
            ],
            [                
                'realname' => 'Corsa',
                'tipus' => 'cotxe',
                'potencia'=> 70,
                'marca_id' => 4,
                'combustio_id' => 2,
            ],                         
        ];

        Vehicle::insert($vehicles);

    }
}
