<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_id', 'type', 'file_path', 'name'
    ];
    protected $casts = [
        'verification_status' => 'string', // string rather than enum because the enum value might not exist in the DB if it was changed after migration
    ];
    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
