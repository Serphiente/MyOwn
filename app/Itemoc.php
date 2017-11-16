<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Itemoc
 *
 * @package App
 * @property string $item
*/
class Itemoc extends Model
{
    use SoftDeletes;

    protected $fillable = ['item_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Itemoc::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setItemIdAttribute($input)
    {
        $this->attributes['item_id'] = $input ? $input : null;
    }
    
    public function item()
    {
        return $this->belongsTo(Listaexterna::class, 'item_id')->withTrashed();
    }
    
}
