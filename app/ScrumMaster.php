<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ScrumMaster
 *
 * @property $id
 * @property $nombre_scrumMaster
 * @property $certificacion_scrumMaster
 * @property $contacto_scrumMaster
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ScrumMaster extends Model
{
    
    static $rules = [
		'nombre_scrumMaster' => 'required',
		'certificacion_scrumMaster' => 'required',
		'contacto_scrumMaster' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_scrumMaster','certificacion_scrumMaster','contacto_scrumMaster'];



}
