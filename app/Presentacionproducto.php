<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Presentacionproducto
 *
 * @package App
 * @property string $nombre
 * @property string $nombrecorto
*/
class Presentacionproducto extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre', 'nombrecorto'];
    
    public static function boot()
    {
        parent::boot();

        Presentacionproducto::observe(new \App\Observers\UserActionsObserver);
    }
    
}
