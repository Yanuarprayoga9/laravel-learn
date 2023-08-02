<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','gender','nis','class_id'
    ];
    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }
 
    public function extracurriculars(): BelongsToMany
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}
