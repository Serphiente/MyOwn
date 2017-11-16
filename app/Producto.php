<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @package App
 * @property string $nombre
 * @property integer $unidadescaja
 * @property string $tipo_producto
 * @property string $presentacion_producto
*/
class Producto extends Model
{
    protected $fillable = ['nombre', 'unidadescaja', 'tipo_producto_id', 'presentacion_producto_id'];
    
    public static function boot()
    {
        parent::boot();

        Producto::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setUnidadescajaAttribute($input)
    {
        $this->attributes['unidadescaja'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTipoProductoIdAttribute($input)
    {
        $this->attributes['tipo_producto_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setPresentacionProductoIdAttribute($input)
    {
        $this->attributes['presentacion_producto_id'] = $input ? $input : null;
    }
    
    public function tipo_producto()
    {
        return $this->belongsTo(Tipoproducto::class, 'tipo_producto_id')->withTrashed();
    }
    
    public function presentacion_producto()
    {
        return $this->belongsTo(Presentacionproducto::class, 'presentacion_producto_id')->withTrashed();
    }
    
    public function principio_activo()
    {
        return $this->belongsToMany(Principioactivo::class, 'principioactivo_producto')->withTrashed();
    }
    
}
