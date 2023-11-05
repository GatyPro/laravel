<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BurndownChart
 *
 * @property $id
 * @property $datosSeguimiento_BurndownChart
 * @property $productOwner_id
 * @property $created_at
 * @property $updated_at
 *
 * @property ProductOwner $productOwner
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BurndownChart extends Model
{
    
    static $rules = [
		'datosSeguimiento_BurndownChart' => 'required',
		'productOwner_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['datosSeguimiento_BurndownChart','productOwner_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productOwner()
    {
        return $this->hasOne('App\ProductOwner', 'id', 'productOwner_id');
    }
    

}
