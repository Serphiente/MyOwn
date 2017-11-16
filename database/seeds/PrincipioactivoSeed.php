<?php

use Illuminate\Database\Seeder;

class PrincipioactivoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nombre' => 'ampicilina',],
            ['id' => 2, 'nombre' => 'sulbactam',],
            ['id' => 3, 'nombre' => 'amoxicilina',],
            ['id' => 4, 'nombre' => 'clorfenamina',],
            ['id' => 5, 'nombre' => 'cefazolina',],
            ['id' => 6, 'nombre' => 'diclofenaco',],
            ['id' => 7, 'nombre' => 'aciclovir',],
            ['id' => 8, 'nombre' => 'ibuprofeno',],
            ['id' => 9, 'nombre' => 'penicilina',],
            ['id' => 10, 'nombre' => 'bencilpenicilina benzatínica',],
            ['id' => 11, 'nombre' => 'valsartan',],
            ['id' => 12, 'nombre' => 'irbesartan',],
            ['id' => 13, 'nombre' => 'cilostazol',],
            ['id' => 14, 'nombre' => 'clopidogrel',],
            ['id' => 15, 'nombre' => 'olanzapina',],
            ['id' => 16, 'nombre' => 'escitalopram',],
            ['id' => 17, 'nombre' => 'letiracetam',],
            ['id' => 18, 'nombre' => 'levetiracetam',],
            ['id' => 19, 'nombre' => 'venlafaxina',],
            ['id' => 20, 'nombre' => 'galantamina',],
            ['id' => 21, 'nombre' => 'memantina',],
            ['id' => 22, 'nombre' => 'topiramato',],
            ['id' => 23, 'nombre' => 'anostrazol',],
            ['id' => 24, 'nombre' => 'letrozol',],
            ['id' => 25, 'nombre' => 'exemestano',],
            ['id' => 26, 'nombre' => 'ondansentron',],
            ['id' => 27, 'nombre' => 'levofloxacino',],
            ['id' => 28, 'nombre' => 'hidroclorotiazida',],
            ['id' => 29, 'nombre' => 'anastrozol',],
            ['id' => 30, 'nombre' => 'clorhidrato de ranitidina',],
            ['id' => 31, 'nombre' => 'omeprazol',],

        ];

        foreach ($items as $item) {
            \App\Principioactivo::create($item);
        }
    }
}
