<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Manufacturador
 *
 * @package App
 * @property string $nombre
*/
class Manufacturador extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre'];
    
    public static function boot()
    {
        parent::boot();

        Manufacturador::observe(new \App\Observers\UserActionsObserver);
    }
    
}
