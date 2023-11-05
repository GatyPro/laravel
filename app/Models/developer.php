<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Developer
 *
 * @property $id
 * @property $nombre_developer
 * @property $rol_developer
 * @property $created_at
 * @property $updated_at
 *
 * @property Task[] $tasks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Developer extends Model
{
    
    static $rules = [
		'nombre_developer' => 'required',
		'rol_developer' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_developer','rol_developer'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'developers_id', 'id');
    }
    

}
