<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 'scholarship_id', 'status', 'notes', 'submitted_at'
    ];
    protected $casts = [
        'submitted_at' => 'datetime',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
