<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Scholarship;
use App\Models\Student;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        $students = [
            [
                'name'           => 'Amina Benali',
                'email'          => 'amina.benali@univ-alger.dz',
                'birth_date'     => '2001-03-15',
                'phone'          => '0555123456',
                'wilaya'         => 'Alger',
                'university'     => 'Université d\'Alger 1',
                'study_level'    => 'master',
                'field_of_study' => 'Informatique',
            ],
            [
                'name'           => 'Youcef Hadj',
                'email'          => 'youcef.hadj@univ-oran.dz',
                'birth_date'     => '2000-07-22',
                'phone'          => '0661987654',
                'wilaya'         => 'Oran',
                'university'     => 'Université d\'Oran',
                'study_level'    => 'doctorat',
                'field_of_study' => 'Génie Civil',
            ],
            [
                'name'           => 'Sara Mekhloufi',
                'email'          => 'sara.mekhloufi@univ-constantine.dz',
                'birth_date'     => '2002-11-08',
                'phone'          => '0770456789',
                'wilaya'         => 'Constantine',
                'university'     => 'Université de Constantine',
                'study_level'    => 'license',
                'field_of_study' => 'Médecine',
            ],
            [
                'name'           => 'Karim Bouzid',
                'email'          => 'karim.bouzid@univ-blida.dz',
                'birth_date'     => '1999-01-30',
                'phone'          => '0550112233',
                'wilaya'         => 'Blida',
                'university'     => 'Université de Blida',
                'study_level'    => 'master',
                'field_of_study' => 'Électronique',
            ],
            [
                'name'           => 'Fatima Zohra Kaci',
                'email'          => 'fz.kaci@univ-tizi.dz',
                'birth_date'     => '2001-09-12',
                'phone'          => '0699334455',
                'wilaya'         => 'Tizi Ouzou',
                'university'     => 'Université Mouloud Mammeri',
                'study_level'    => 'master',
                'field_of_study' => 'Biologie',
            ],
        ];

        $createdStudents = [];
        foreach ($students as $studentData) {
            $createdStudents[] = Student::create($studentData);
        }

        $activeScholarships = Scholarship::where('is_active', true)->get();

        if ($activeScholarships->isEmpty()) {
            return;
        }

        $applications = [
            [
                'student_index'  => 0,
                'scholarship_index' => 0,
                'status'         => 'pending',
                'notes'          => 'Très motivée pour poursuivre un Master en IA en France.',
                'submitted_at'   => '2026-06-10 14:30:00',
            ],
            [
                'student_index'  => 1,
                'scholarship_index' => 2,
                'status'         => 'accepted',
                'notes'          => 'Candidature approuvée pour le programme doctoral Vanier.',
                'submitted_at'   => '2026-05-20 09:15:00',
            ],
            [
                'student_index'  => 2,
                'scholarship_index' => 3,
                'status'         => 'pending',
                'notes'          => null,
                'submitted_at'   => '2026-06-12 16:45:00',
            ],
            [
                'student_index'  => 3,
                'scholarship_index' => 4,
                'status'         => 'rejected',
                'notes'          => 'Niveau de langue insuffisant. Peut re-postuler au prochain semestre.',
                'submitted_at'   => '2026-04-05 11:00:00',
            ],
            [
                'student_index'  => 4,
                'scholarship_index' => 1,
                'status'         => 'pending',
                'notes'          => 'Dossier en cours de vérification.',
                'submitted_at'   => '2026-06-13 08:20:00',
            ],
        ];

        foreach ($applications as $appData) {
            $student     = $createdStudents[$appData['student_index']];
            $scholarship = $activeScholarships[$appData['scholarship_index']] ?? $activeScholarships->first();

            Application::create([
                'student_id'     => $student->id,
                'scholarship_id' => $scholarship->id,
                'status'         => $appData['status'],
                'notes'          => $appData['notes'],
                'submitted_at'   => $appData['submitted_at'],
            ]);
        }
    }
}
