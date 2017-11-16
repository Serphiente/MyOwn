<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Principioactivo
 *
 * @package App
 * @property string $nombre
*/
class Principioactivo extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre'];
    
    public static function boot()
    {
        parent::boot();

        Principioactivo::observe(new \App\Observers\UserActionsObserver);
    }
    
}
