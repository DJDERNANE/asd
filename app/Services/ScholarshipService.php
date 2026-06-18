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

    /**
     * Get all active scholarships for a specific ambassador.
     */
    public function getAllByAmbassadorId($id): Collection
    {
        return Scholarship::active()
            ->where('ambassador_id', $id)
            ->with('ambassador:id,name,code,country')
            ->get();
    }
}
