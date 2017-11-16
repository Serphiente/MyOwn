<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ordendecompra
 *
 * @package App
 * @property string $proveedor
 * @property string $contacto
 * @property string $fecha
*/
class Ordendecompra extends Model
{
    use SoftDeletes;

    protected $fillable = ['fecha', 'proveedor_id', 'contacto_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Ordendecompra::observe(new \App\Observers\UserActionsObserver);
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
    public function setContactoIdAttribute($input)
    {
        $this->attributes['contacto_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setFechaAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['fecha'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['fecha'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getFechaAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function proveedor()
    {
        return $this->belongsTo(ContactCompany::class, 'proveedor_id');
    }
    
    public function contacto()
    {
        return $this->belongsTo(Contact::class, 'contacto_id');
    }
    
}
