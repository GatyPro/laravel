<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductOwner
 *
 * @property $id
 * @property $nombre_productOwner
 * @property $experiencia_productOwner
 * @property $contacto_productOwner
 * @property $created_at
 * @property $updated_at
 *
 * @property BurndownChart[] $burndownCharts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductOwner extends Model
{
    
    static $rules = [
		'nombre_productOwner' => 'required',
		'experiencia_productOwner' => 'required',
		'contacto_productOwner' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_productOwner','experiencia_productOwner','contacto_productOwner'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function burndownCharts()
    {
        return $this->hasMany('App\BurndownChart', 'productOwner_id', 'id');
    }
    

}
