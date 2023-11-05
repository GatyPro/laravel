<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sprint
 *
 * @property $id
 * @property $numero_sprint
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property ScrumTeam[] $scrumTeams
 * @property Task[] $tasks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sprint extends Model
{
    
    static $rules = [
		'numero_sprint' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_sprint','fecha_inicio','fecha_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scrumTeams()
    {
        return $this->hasMany('App\Models\ScrumTeam', 'sprint_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'sprints_id', 'id');
    }
    

}
