<?php

use Illuminate\Database\Seeder;

class ListaexternaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'producto_id' => 3, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '28-02-2019', 'regisp' => 'F-18846/16', 'preciounidad' => '440.00', 'precio_caja' => '11000.00', 'margen' => 30, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 2, 'producto_id' => 11, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '28-02-2019', 'regisp' => 'F-18644/16', 'preciounidad' => '390.00', 'precio_caja' => '9750.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 3, 'producto_id' => 5, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '30-11-2020', 'regisp' => 'F-18929/16', 'preciounidad' => '550.00', 'precio_caja' => '13750.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 4, 'producto_id' => 16, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-07-2019', 'regisp' => 'B-2386/14', 'preciounidad' => '165.00', 'precio_caja' => '8250.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 5, 'producto_id' => 15, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-10-2019', 'regisp' => 'B-2341/13', 'preciounidad' => '200.00', 'precio_caja' => '10000.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 6, 'producto_id' => 14, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-10-2019', 'regisp' => 'B-2385/14', 'preciounidad' => '165.00', 'precio_caja' => '8250.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 8, 'producto_id' => 6, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '30-04-2019', 'regisp' => 'F-21247/14', 'preciounidad' => '303.00', 'precio_caja' => '15150.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 10, 'producto_id' => 13, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-12-2019', 'regisp' => 'F-21536/14', 'preciounidad' => '580.00', 'precio_caja' => '14500.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 11, 'producto_id' => 45, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-01-2018', 'regisp' => 'F-21535/14', 'preciounidad' => '42.00', 'precio_caja' => '4200.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 12, 'producto_id' => 46, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-12-2019', 'regisp' => 'F-20509/13', 'preciounidad' => '800.00', 'precio_caja' => '40000.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 13, 'producto_id' => 4, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '30-11-2020', 'regisp' => 'F-18929/16', 'preciounidad' => '501.00', 'precio_caja' => '501.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 14, 'producto_id' => 9, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-08-2018', 'regisp' => 'F-18941/16', 'preciounidad' => '250.00', 'precio_caja' => '250.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 15, 'producto_id' => 10, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '31-03-2019', 'regisp' => 'F-18644/16', 'preciounidad' => '507.00', 'precio_caja' => '507.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 16, 'producto_id' => 2, 'proveedor_id' => 1, 'marca_id' => 1, 'codigo' => null, 'vencimiento' => '28-02-2019', 'regisp' => 'F-18846/16', 'preciounidad' => '520.00', 'precio_caja' => '520.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 17, 'producto_id' => 17, 'proveedor_id' => 2, 'marca_id' => 2, 'codigo' => null, 'vencimiento' => '26-10-2017', 'regisp' => 'F-21231/14', 'preciounidad' => '142.50', 'precio_caja' => '3990.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => 'Solicitar fechas de vencimiento',],
            ['id' => 18, 'producto_id' => 18, 'proveedor_id' => 2, 'marca_id' => 2, 'codigo' => null, 'vencimiento' => '26-10-2017', 'regisp' => 'F-21232/14', 'preciounidad' => '3990.00', 'precio_caja' => '142.50', 'margen' => null, 'stock' => 'disponible', 'observaciones' => 'solicitar fecha de vencimiento',],
            ['id' => 19, 'producto_id' => 19, 'proveedor_id' => 2, 'marca_id' => 2, 'codigo' => null, 'vencimiento' => '26-10-2017', 'regisp' => 'F-21640/15', 'preciounidad' => '185.71', 'precio_caja' => '5200.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 20, 'producto_id' => 20, 'proveedor_id' => 2, 'marca_id' => 2, 'codigo' => null, 'vencimiento' => '26-10-2017', 'regisp' => 'F-21717/15', 'preciounidad' => '185.71', 'precio_caja' => '5200.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 21, 'producto_id' => 21, 'proveedor_id' => 2, 'marca_id' => 2, 'codigo' => null, 'vencimiento' => '26-10-2017', 'regisp' => 'F-21641/15', 'preciounidad' => '185.71', 'precio_caja' => '5200.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 22, 'producto_id' => 22, 'proveedor_id' => 2, 'marca_id' => 2, 'codigo' => null, 'vencimiento' => '26-10-2017', 'regisp' => 'F-21513/14', 'preciounidad' => '214.29', 'precio_caja' => '6000.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],
            ['id' => 23, 'producto_id' => 23, 'proveedor_id' => 2, 'marca_id' => 2, 'codigo' => null, 'vencimiento' => '26-10-2017', 'regisp' => 'F-21514/14', 'preciounidad' => '250.00', 'precio_caja' => '7000.00', 'margen' => null, 'stock' => 'disponible', 'observaciones' => null,],

        ];

        foreach ($items as $item) {
            \App\Listaexterna::create($item);
        }
    }
}
