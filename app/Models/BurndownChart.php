<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurndownChart extends Model
{
    use HasFactory;

    protected $fillable = [
        // Agrega aquí los campos que deseas que sean asignables en masa
    ];

    /**
     * Definir la relación de uno a muchos con la clase Sprint.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sprints()
    {
        return $this->hasMany(Sprint::class);
    }

    // Puedes agregar más relaciones según sea necesario.

}
