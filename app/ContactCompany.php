<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactCompany
 *
 * @package App
 * @property string $name
 * @property string $rut
 * @property string $address
 * @property string $website
 * @property string $email
*/
class ContactCompany extends Model
{
    protected $fillable = ['name', 'rut', 'address', 'website', 'email'];
    
    public static function boot()
    {
        parent::boot();

        ContactCompany::observe(new \App\Observers\UserActionsObserver);
    }
    
}
