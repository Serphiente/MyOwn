<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipoproducto
 *
 * @package App
 * @property string $nombre
*/
class Tipoproducto extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre'];
    
    public static function boot()
    {
        parent::boot();

        Tipoproducto::observe(new \App\Observers\UserActionsObserver);
    }
    
}
