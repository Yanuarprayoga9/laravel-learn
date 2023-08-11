<?php

namespace App\Models;

use App\Models\Teacher;
use Database\Factories\ClassFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ClassRoom extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = [
        'name','teacher_id'
    ];
    // protected static $factory = ClassFactory::class;
    public function students(): HasMany
    {
        return $this->hasMany(Student::class,'class_id','id');
    }
    /**
     * Get the homeRoom that owns the ClassRoom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo;
     */
    public function homeroomTeacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
