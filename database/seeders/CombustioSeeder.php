<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Combustio;

class CombustioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           $combustio = [
            ['combustio'=>'Diesel'],
            ['combustio'=>'Gasolina'],
            ['combustio'=>'Electric'],
			['combustio'=>'Hidrogen'],
			
		];

		Combustio::insert($combustio);
    }
}
