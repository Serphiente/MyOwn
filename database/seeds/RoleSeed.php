<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrador (puede crear otros usuarios)',],
            ['id' => 3, 'title' => 'Gerente',],
            ['id' => 4, 'title' => 'Director Técnico',],
            ['id' => 5, 'title' => 'Vendedor',],
            ['id' => 6, 'title' => 'Jefe de Distribución',],
            ['id' => 7, 'title' => 'Jefe de Finanzas',],
            ['id' => 8, 'title' => 'Asistente de Gerencia',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
