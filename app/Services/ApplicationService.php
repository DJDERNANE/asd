<?php

namespace App\Services;

use App\Models\Application;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class ApplicationService
{
    /**
     * Create a new application with student data.
     *
     * @param  array  $validatedData
     * @return Application
     */
    public function create(array $validatedData): Application
    {
        return DB::transaction(function () use ($validatedData) {
            $student = Student::create([
                'name'           => $validatedData['name'],
                'birth_date'     => $validatedData['birth_date'],
                'phone'          => $validatedData['phone'],
                'wilaya'         => $validatedData['wilaya'],
                'university'     => $validatedData['university'],
                'study_level'    => $validatedData['study_level'],
                'field_of_study' => $validatedData['field_of_study'],
            ]);

            return Application::create([
                'student_id'     => $student->id,
                'scholarship_id' => $validatedData['scholarship_id'],
                'status'         => 'pending',
                'notes'          => $validatedData['notes'] ?? null,
                'submitted_at'   => now(),
            ]);
        });
    }
}
