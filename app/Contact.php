<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @package App
 * @property string $company
 * @property string $first_name
 * @property string $last_name
 * @property string $phone1
 * @property string $email
 * @property text $observaciones
*/
class Contact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone1', 'email', 'observaciones', 'company_id'];
    
    public static function boot()
    {
        parent::boot();

        Contact::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCompanyIdAttribute($input)
    {
        $this->attributes['company_id'] = $input ? $input : null;
    }
    
    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }
    
}
