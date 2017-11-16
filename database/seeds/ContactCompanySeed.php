<?php

use Illuminate\Database\Seeder;

class ContactCompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'medbiotec spa', 'rut' => '76280494-8', 'address' => null, 'website' => null, 'email' => 'contacto@medbiotec.cl',],
            ['id' => 2, 'name' => 'gelenicum health chile spa', 'rut' => '76285229-2', 'address' => null, 'website' => 'www.galenicum.cl', 'email' => null,],

        ];

        foreach ($items as $item) {
            \App\ContactCompany::create($item);
        }
    }
}
