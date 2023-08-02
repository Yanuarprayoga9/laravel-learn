<?php

namespace App\Models;

use Database\Factories\ClassFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ClassRoom extends Model
{
    use HasFactory;
    protected $table = 'class';
    // protected static $factory = ClassFactory::class;
    public function students(): HasMany
    {
        return $this->hasMany(Student::class,'class_id','id');
    }
}
