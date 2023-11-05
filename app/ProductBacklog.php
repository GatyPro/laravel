<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductBacklog
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre_productbacklog
 * @property $tarea
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductBacklog extends Model
{
    
    static $rules = [
		'nombre_productbacklog' => 'required',
		'tarea' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_productbacklog','tarea'];



}
