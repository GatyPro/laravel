<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrumTeam extends Model
{
    use HasFactory;

    /**
     * Define la relación de uno a uno con la clase ProductOwner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productOwner()
    {
        return $this->belongsTo(ProductOwner::class);
    }

    /**
     * Define la relación de uno a uno con la clase ScrumMaster.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function scrumMaster()
    {
        return $this->hasOne(ScrumMaster::class);
    }

    /**
     * Define la relación de uno a muchos con la clase Developers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function developers()
    {
        return $this->hasMany(Developers::class);
    }

    /**
     * Define la relación de uno a muchos con la clase Sprint.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sprints()
    {
        return $this->hasMany(Sprint::class);
    }

    /**
     * Define la relación de uno a uno con la clase Company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
