<?php

namespace Valpuia\Mizokhua\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Village extends Model
{
    protected $guarded = [];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
