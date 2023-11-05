<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOwner extends Model
{
    use HasFactory;

    /**
     * Define la relación de uno a uno con la clase ScrumTeam.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function scrumTeam()
    {
        return $this->hasOne(ScrumTeam::class);
    }
}
