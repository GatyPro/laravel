<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Task;

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
    
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nombre_productbacklog',
      'tarea'
    ];

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

}