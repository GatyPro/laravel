<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBacklog extends Model
{
    use HasFactory;

    /**
     * Define la relación de muchos a muchos con la clase Task.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

     protected $fillable=[
        'nombre_productbacklog',
        'tarea'
     ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
