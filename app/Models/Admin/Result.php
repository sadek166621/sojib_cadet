<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
    public function group()
    {
        return $this->belongsTo(Group::class,'section');
    }

    public function examname()
    {
        return $this->belongsTo(Exam::class,'exam');
    }
}
