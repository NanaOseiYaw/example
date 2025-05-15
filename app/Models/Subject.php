<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    public function teachers(): BelongsToMany{
        //return $this->belongsTo(Teacher::class, 'teachers_id');
        return $this->belongsToMany(Teacher::class);
    }
}