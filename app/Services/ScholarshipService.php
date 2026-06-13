<?php

namespace App\Services;

use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Collection;

class ScholarshipService
{
    /**
     * Get all active scholarships with their ambassador.
     */
    public function getAll(): Collection
    {
        return Scholarship::active()
            ->with('ambassador:id,name,code,country')
            ->get();
    }
}
