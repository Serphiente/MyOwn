<?php

use Illuminate\Database\Seeder;

class PresentacionproductoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nombre' => 'comprimido', 'nombrecorto' => 'comp',],
            ['id' => 2, 'nombre' => 'cápsula', 'nombrecorto' => 'cap',],
            ['id' => 3, 'nombre' => 'gragea', 'nombrecorto' => 'grag',],
            ['id' => 4, 'nombre' => 'tableta', 'nombrecorto' => 'tab',],
            ['id' => 5, 'nombre' => 'tableta vaginal', 'nombrecorto' => 'tabv',],
            ['id' => 6, 'nombre' => 'ampolla', 'nombrecorto' => 'amp',],
            ['id' => 7, 'nombre' => 'frasco ampolla', 'nombrecorto' => 'FA ',],
            ['id' => 8, 'nombre' => 'frasco', 'nombrecorto' => 'fco',],
            ['id' => 9, 'nombre' => 'pote', 'nombrecorto' => 'pote',],
            ['id' => 10, 'nombre' => 'tubo', 'nombrecorto' => 'tubo',],
            ['id' => 11, 'nombre' => 'unidad', 'nombrecorto' => 'unid',],

        ];

        foreach ($items as $item) {
            \App\Presentacionproducto::create($item);
        }
    }
}
