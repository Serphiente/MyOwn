<?php

use Illuminate\Database\Seeder;

class ProductoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nombre' => 'ampicilina / sulbactam 1.5G x 50 FA', 'unidadescaja' => 50, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 7,],
            ['id' => 2, 'nombre' => 'betaciclina 250mg / 5 ml jbe x 60 ml', 'unidadescaja' => 1, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 8,],
            ['id' => 3, 'nombre' => 'betacilina 250 mg/5 ml X 60 ml caja x 25 fcos.', 'unidadescaja' => 25, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 8,],
            ['id' => 4, 'nombre' => 'c-allergy 2 mg/5 ml jarabe x 100 ml', 'unidadescaja' => 1, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 8,],
            ['id' => 5, 'nombre' => 'c-allergy jbe 2 mg 100 ml x 25 frascos', 'unidadescaja' => 25, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 8,],
            ['id' => 6, 'nombre' => 'cefazolina 1 gr x 50 fa', 'unidadescaja' => 50, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 7,],
            ['id' => 7, 'nombre' => 'diclofenaco iny. 75 mg/3 ml est.x 5 amp', 'unidadescaja' => 5, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 6,],
            ['id' => 8, 'nombre' => 'diclofenaco iny. 75 mg/3 ml x 100 amp', 'unidadescaja' => 100, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 6,],
            ['id' => 9, 'nombre' => 'herpavir crema dérmica 5% x 5 gr', 'unidadescaja' => 1, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 10,],
            ['id' => 10, 'nombre' => 'ibuflam 100 mg susp. oral x 100 ml', 'unidadescaja' => 1, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 8,],
            ['id' => 11, 'nombre' => 'ibuflam susp 100 mg/5 ml x 100 ml caja x 25 fcos', 'unidadescaja' => 25, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 8,],
            ['id' => 12, 'nombre' => 'ibuflam forte 200 mg susp. oral x 100 ml', 'unidadescaja' => 1, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 8,],
            ['id' => 13, 'nombre' => 'ibuflam forte 200 mg susp. oral x 100 ml x 25 fcos', 'unidadescaja' => 25, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 8,],
            ['id' => 14, 'nombre' => 'penicilina sod. 1.000.000 ui x 50 fa', 'unidadescaja' => 50, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 7,],
            ['id' => 15, 'nombre' => 'penicilina benz. 1.200.000 ui x 50 fa', 'unidadescaja' => 50, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 7,],
            ['id' => 16, 'nombre' => 'penicilina 2.000.000 ui x 50 fcos', 'unidadescaja' => 50, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 8,],
            ['id' => 17, 'nombre' => 'valvitae 80mg BE caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 18, 'nombre' => 'valvitae 160mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 19, 'nombre' => 'valvitae plus 80mg / 12,5mg hctz be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 20, 'nombre' => 'valvitae plus 160mg / 12,5mg hctz be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 21, 'nombre' => 'valvitae plus 160mg / 25mg hctz be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 22, 'nombre' => 'irbevitae 150mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 23, 'nombre' => 'irbevitae 300mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 24, 'nombre' => 'cilosvitae 100mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 25, 'nombre' => 'clopivitae 75mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 26, 'nombre' => 'olanvitae 10mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 27, 'nombre' => 'olanvitae 5mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 28, 'nombre' => 'escitavitae 10mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 29, 'nombre' => 'escitavitae 20mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 30, 'nombre' => 'levevitae 500mg be caja x 30 comp', 'unidadescaja' => 30, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 31, 'nombre' => 'levevitae 1000mg be caja x 30 comp', 'unidadescaja' => 30, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 32, 'nombre' => 'venlavitae 150 mg xr be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 33, 'nombre' => 'venlavitae 75mg xr be caja x 30 comp', 'unidadescaja' => 30, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 34, 'nombre' => 'galanvitae 8mg be caja x 7 comp', 'unidadescaja' => 7, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 35, 'nombre' => 'galanvitae 16mg be caja x 7 comp', 'unidadescaja' => 7, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 36, 'nombre' => 'memanvitae 10mg be caja x 56 comp', 'unidadescaja' => 56, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 37, 'nombre' => 'topivitae 25mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 38, 'nombre' => 'topivitae 50mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 39, 'nombre' => 'topivitae 100mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 40, 'nombre' => 'anasvitae 1mg be caja x 28 comp', 'unidadescaja' => 28, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 41, 'nombre' => 'letrovitae 2,5mg be caja x 30 comp', 'unidadescaja' => 30, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 42, 'nombre' => 'exevitae 25mg be caja x 30 comp', 'unidadescaja' => 30, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 43, 'nombre' => 'ondanvitae 8mg be caja x 10 comp', 'unidadescaja' => 10, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 44, 'nombre' => 'lefloxavitae 500mg be caja x 10 comp', 'unidadescaja' => 10, 'tipo_producto_id' => 2, 'presentacion_producto_id' => 1,],
            ['id' => 45, 'nombre' => 'ranitidina iny. 50mg/2ml ', 'unidadescaja' => 100, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 6,],
            ['id' => 46, 'nombre' => 'omeprazol liofilizado iny. 40mg', 'unidadescaja' => 50, 'tipo_producto_id' => 1, 'presentacion_producto_id' => 7,],

        ];

        foreach ($items as $item) {
            \App\Producto::create($item);
        }
    }
}
