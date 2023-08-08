<?php

namespace App\Models;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    /**
     * Get the user associated with the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function class()
    {
        return $this->hasOne(ClassRoom::class);
    }
}
