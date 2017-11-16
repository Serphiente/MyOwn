<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Listaexterna
 *
 * @package App
 * @property string $producto
 * @property string $proveedor
 * @property string $marca
 * @property string $codigo
 * @property string $vencimiento
 * @property string $regisp
 * @property decimal $preciounidad
 * @property decimal $precio_caja
 * @property integer $margen
 * @property string $stock
 * @property text $observaciones
*/
class Listaexterna extends Model
{
    use SoftDeletes;

    protected $fillable = ['codigo', 'vencimiento', 'regisp', 'preciounidad', 'precio_caja', 'margen', 'stock', 'observaciones', 'producto_id', 'proveedor_id', 'marca_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Listaexterna::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setProductoIdAttribute($input)
    {
        $this->attributes['producto_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setProveedorIdAttribute($input)
    {
        $this->attributes['proveedor_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setMarcaIdAttribute($input)
    {
        $this->attributes['marca_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setVencimientoAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['vencimiento'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['vencimiento'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getVencimientoAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setPreciounidadAttribute($input)
    {
        $this->attributes['preciounidad'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setPrecioCajaAttribute($input)
    {
        $this->attributes['precio_caja'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setMargenAttribute($input)
    {
        $this->attributes['margen'] = $input ? $input : null;
    }
    
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
    
    public function proveedor()
    {
        return $this->belongsTo(ContactCompany::class, 'proveedor_id');
    }
    
    public function marca()
    {
        return $this->belongsTo(Manufacturador::class, 'marca_id')->withTrashed();
    }
    
    public function itemoc() {
        return $this->hasMany(Itemoc::class, 'item_id');
    }
}
