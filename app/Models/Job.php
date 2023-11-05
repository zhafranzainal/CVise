<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $fillable = [
        'title',
        'description',
        'responsibilities',
        'technical_skills',
        'soft_skills',
        'salary_min',
        'salary_max',
        'programming_languages',
        'tools',
        'career_progression',
        'job_outlook',
        'pros',
        'cons',
    ];

    protected $searchableFields = ['*'];

    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }
}
