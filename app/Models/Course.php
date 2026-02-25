<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\AcademicPeriod;
use App\Models\Enrollment;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
    protected $fillable = [
        'teacher_id',
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function academicPeriod()
    {
        return $this->hasMany(AcademicPeriod::class);
    }
    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
}
