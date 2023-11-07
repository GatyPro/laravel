<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ScrumTeam
 *
 * @property $id
 * @property $nombre
 * @property $sprint_id
 * @property $SprintActual
 * @property $created_at
 * @property $updated_at
 *
 * @property Sprint $sprint
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ScrumTeam extends Model
{
    
    static $rules = [
		'sprint_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','sprint_id','SprintActual'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sprint()
    {
        return $this->hasOne('App\Sprint', 'id', 'sprint_id');
    }
    

}