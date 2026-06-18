<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambassador extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'ambassador_name', 'ambassador_email', 'country', 'is_active', 'image',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class);
    }
}
