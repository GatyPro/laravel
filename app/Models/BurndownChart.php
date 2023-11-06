<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BurndownChart
 *
 * @property $id
 * @property $datosSeguimiento_BurdownChart
 * @property $productOwner
 * @property $created_at
 * @property $updated_at
 *
 * @property ProductOwner $developer
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
    protected $fillable = ['datosSeguimiento_BurdownChart','productOwner_id'];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productOwner()
    {
        return $this->hasOne('App\Models\productOwner', 'id', 'productOwner_id');
    }
}



