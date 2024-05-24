<?php

namespace Valpuia\Mizokhua\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    protected $guarded = [];

    public function villages(): HasMany
    {
        return $this->hasMany(Village::class);
    }
}
