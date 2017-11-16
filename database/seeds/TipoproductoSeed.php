<?php

use Illuminate\Database\Seeder;

class TipoproductoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nombre' => 'clínico',],
            ['id' => 2, 'nombre' => 'retail',],

        ];

        foreach ($items as $item) {
            \App\Tipoproducto::create($item);
        }
    }
}
