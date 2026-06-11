<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'birth_date', 'phone', 'wilaya', 'university', 'study_level', 'field_of_study'
    ];
    protected $casts = [
        'birth_date' => 'date',
    ];
    
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
