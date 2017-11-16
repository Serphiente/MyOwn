<?php

use Illuminate\Database\Seeder;

class ContactSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'company_id' => 1, 'first_name' => 'Mauricio', 'last_name' => 'Alfaro', 'phone1' => '+56 34 2460336', 'email' => null, 'observaciones' => '',],
            ['id' => 2, 'company_id' => 2, 'first_name' => 'mauricio', 'last_name' => 'sagredo', 'phone1' => '+56 2 27554471', 'email' => null, 'observaciones' => '',],
            ['id' => 3, 'company_id' => 1, 'first_name' => 'karen', 'last_name' => 'rojas', 'phone1' => '+56 9 64141708', 'email' => 'krojas@labofar.cl', 'observaciones' => '',],

        ];

        foreach ($items as $item) {
            \App\Contact::create($item);
        }
    }
}
