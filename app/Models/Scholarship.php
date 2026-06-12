<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'requirements', 'amount', 'start_date', 'end_date', 'is_active', 'ambassador_id'
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function ambassador()
    {
        return $this->belongsTo(Ambassador::class);
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
    public function scopeActive($query)
    {
        return $query->where('is_active', true)
                     ->where('end_date', '>=', now());
    }
}
