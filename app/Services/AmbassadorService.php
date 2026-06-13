<?php

namespace App\Services;

use App\Models\Ambassador;
use Illuminate\Database\Eloquent\Collection;

class AmbassadorService
{
    /**
     * Get all active ambassadors with their active scholarships.
     */
    public function getAll(): Collection
    {
        return Ambassador::where('is_active', true)
            ->with(['scholarships' => function ($query) {
                $query->active();
            }])
            ->get();
    }
}
