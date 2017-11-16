<?php

use Illuminate\Database\Seeder;

class ManufacturadorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nombre' => 'IMPROFAR LTDA.',],
            ['id' => 2, 'nombre' => 'GALENICUM HEALTH CHILE S.p.A.',],

        ];

        foreach ($items as $item) {
            \App\Manufacturador::create($item);
        }
    }
}
