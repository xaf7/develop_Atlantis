<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class teacher extends Model
{
protected $guarded = [];

public function teacher():HasMany{
    return $this->hasMany(teacher::class);
}


}
