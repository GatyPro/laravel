<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 *
 * @property $id
 * @property $sprints_id
 * @property $description
 * @property $estado
 * @property $developers_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Developer $developer
 * @property Sprint $sprint
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Task extends Model
{

    static $rules = [
		'sprints_id' => 'required',
		'description' => 'required',
		'estado' => 'required',
		'developers_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sprints_id','description','estado','developers_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function developer()
    {
        return $this->hasOne('App\Models\Developer', 'id', 'developers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sprint()
    {
        return $this->hasOne('App\Models\Sprint', 'id', 'sprints_id');
    }


}
