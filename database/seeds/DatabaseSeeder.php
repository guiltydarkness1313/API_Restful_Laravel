<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Fabricante;
use App\Avion;

class DatabaseSeeder extends Seeder {
    public function run()
    {
        Model::unguard();
        $this->call('FabricantesSeeder');
        $this->call('AvionesSeeder');
    }
}

class FabricantesSeeder extends Seeder {
    public function run()
    {
        DB::table('fabricantes')->delete();
        Fabricante::create(['nombre' => 'AirLines', 'direccion' => 'Lima', 'telefono' => 4178541 ]);
        Fabricante::create(['nombre' => 'FactLines', 'direccion' => 'San Isidro', 'telefono' => 4221778 ]);

    }
}
class AvionesSeeder extends Seeder {
    public function run()
    {
        DB::table('aviones')->delete();
        Avion::create(['modelo' => 'XJU987',
            'longitud' => 70.5,
            'capacidad' => 150,
            'velocidad'=>3000,
            'alcance'=>300,
            'fabricante_id'=>1]);
        Avion::create(['modelo' => 'MLP123',
            'longitud' => 80.6,
            'capacidad' => 150,
            'velocidad'=>3000,
            'alcance'=>300,
            'fabricante_id'=>2]);
    }
}
