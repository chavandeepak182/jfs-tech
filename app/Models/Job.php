<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    protected $fillable = [
        'job_title',
        'slug',
        'department',
        'employment_type',
        'location',
        'description',
        'status',
    ];

    /*
    |--------------------------------------------------------------------------
    | Job Applications
    |--------------------------------------------------------------------------
    */

    public function applications(): HasMany
    {
        return $this->hasMany(
            CareerApplication::class,
            'job_id'
        );
    }
}