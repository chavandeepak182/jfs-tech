<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Job;

class CareerApplication extends Model
{
    protected $fillable = [
        'job_id',
        'name',
        'phone_number',
        'email',
        'resume',
        'status',
    ];

    /*
    |--------------------------------------------------------------------------
    | Application belongs to Job
    |--------------------------------------------------------------------------
    */

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}