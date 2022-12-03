<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $marcas = [
            ['name'=>'Citroen'],
            ['name'=>'Toyota'],
            ['name'=>'Kawasaki'],
			['name'=>'Opel'],
			['name'=>'Tesla'],
			['name'=>'Honda'],
			['name'=>'Suzuki'],
			['name'=>'Seat'],
			['name'=>'BMW'],
			['name'=>'Ford'],
		];

		Marca::insert($marcas);

    }
}
