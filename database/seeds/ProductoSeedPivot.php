<?php

use Illuminate\Database\Seeder;

class ProductoSeedPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            1 => [
                'principio_activo' => [1, 2],
            ],
            2 => [
                'principio_activo' => [3],
            ],
            3 => [
                'principio_activo' => [3],
            ],
            4 => [
                'principio_activo' => [4],
            ],
            5 => [
                'principio_activo' => [4],
            ],
            6 => [
                'principio_activo' => [5],
            ],
            7 => [
                'principio_activo' => [6],
            ],
            8 => [
                'principio_activo' => [6],
            ],
            9 => [
                'principio_activo' => [7],
            ],
            10 => [
                'principio_activo' => [8],
            ],
            11 => [
                'principio_activo' => [8],
            ],
            12 => [
                'principio_activo' => [8],
            ],
            13 => [
                'principio_activo' => [8],
            ],
            14 => [
                'principio_activo' => [9],
            ],
            15 => [
                'principio_activo' => [10],
            ],
            16 => [
                'principio_activo' => [9],
            ],
            17 => [
                'principio_activo' => [11],
            ],
            18 => [
                'principio_activo' => [11],
            ],
            19 => [
                'principio_activo' => [11, 28],
            ],
            20 => [
                'principio_activo' => [11, 28],
            ],
            21 => [
                'principio_activo' => [11, 28],
            ],
            22 => [
                'principio_activo' => [12],
            ],
            23 => [
                'principio_activo' => [12],
            ],
            24 => [
                'principio_activo' => [13],
            ],
            25 => [
                'principio_activo' => [14],
            ],
            26 => [
                'principio_activo' => [15],
            ],
            27 => [
                'principio_activo' => [15],
            ],
            28 => [
                'principio_activo' => [16],
            ],
            29 => [
                'principio_activo' => [16],
            ],
            30 => [
                'principio_activo' => [18],
            ],
            31 => [
                'principio_activo' => [18],
            ],
            32 => [
                'principio_activo' => [19],
            ],
            33 => [
                'principio_activo' => [19],
            ],
            34 => [
                'principio_activo' => [20],
            ],
            35 => [
                'principio_activo' => [20],
            ],
            36 => [
                'principio_activo' => [21],
            ],
            37 => [
                'principio_activo' => [22],
            ],
            38 => [
                'principio_activo' => [22],
            ],
            39 => [
                'principio_activo' => [22],
            ],
            40 => [
                'principio_activo' => [29],
            ],
            41 => [
                'principio_activo' => [24],
            ],
            42 => [
                'principio_activo' => [25],
            ],
            43 => [
                'principio_activo' => [26],
            ],
            44 => [
                'principio_activo' => [27],
            ],
            45 => [
                'principio_activo' => [30],
            ],
            46 => [
                'principio_activo' => [31],
            ],

        ];

        foreach ($items as $id => $item) {
            $producto = \App\Producto::find($id);

            foreach ($item as $key => $ids) {
                $producto->{$key}()->sync($ids);
            }
        }
    }
}
