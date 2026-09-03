<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_title',
        'department',
        'employment_type',
        'description',
        'requirements',
        'responsibilities',
        'salary_range',
        'location',
        'experience_level',
        'status',
        'posted_date',
        'closing_date',
        'views_count',
        'applications_count'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'posted_date' => 'date',
        'closing_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    /**
     * Get the employment type label.
     *
     * @return string
     */
    public function getEmploymentTypeLabelAttribute()
    {
        $labels = [
            'full-time' => 'Full Time',
            'part-time' => 'Part Time',
            'contract' => 'Contract',
            'internship' => 'Internship',
            'remote' => 'Remote'
        ];
        return $labels[$this->employment_type] ?? $this->employment_type;
    }

    /**
     * Get the status label.
     *
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        $labels = [
            'active' => 'Active',
            'inactive' => 'Inactive',
            'draft' => 'Draft',
            'closed' => 'Closed'
        ];
        return $labels[$this->status] ?? $this->status;
    }

    /**
     * Get the experience level label.
     *
     * @return string
     */
    public function getExperienceLevelLabelAttribute()
    {
        $labels = [
            'entry' => 'Entry Level',
            'mid' => 'Mid Level',
            'senior' => 'Senior Level',
            'lead' => 'Lead / Manager'
        ];
        return $labels[$this->experience_level] ?? $this->experience_level;
    }

    /**
     * Scope a query to only include active careers.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope a query to filter by department.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $department
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByDepartment($query, $department)
    {
        return $query->where('department', $department);
    }

    /**
     * Scope a query to filter by employment type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByEmploymentType($query, $type)
    {
        return $query->where('employment_type', $type);
    }

    /**
     * Increment views count.
     *
     * @return void
     */
    public function incrementViews()
    {
        $this->increment('views_count');
    }

    /**
     * Increment applications count.
     *
     * @return void
     */
    public function incrementApplications()
    {
        $this->increment('applications_count');
    }
}