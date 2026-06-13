<?php

namespace Database\Seeders;

use App\Models\Ambassador;
use App\Models\Scholarship;
use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    public function run(): void
    {
        $scholarships = [
            // France (FR)
            [
                'title'         => 'Bourse Eiffel Excellence',
                'description'   => 'Programme de bourses du ministère français de l\'Europe et des Affaires étrangères pour les étudiants internationaux en Master et Doctorat.',
                'requirements'  => 'Licence avec mention Bien minimum. Âge maximum : 25 ans pour le Master, 30 ans pour le Doctorat.',
                'amount'        => 1181.00,
                'start_date'    => '2026-09-01',
                'end_date'      => '2027-06-30',
                'is_active'     => true,
                'ambassador_code' => 'FR',
            ],
            [
                'title'         => 'Bourse d\'études supérieures France-Algérie',
                'description'   => 'Bourse couvrant les frais de scolarité et un soutien mensuel pour les étudiants algériens poursuivant des études en France.',
                'requirements'  => 'Nationalité algérienne. Inscription dans un établissement français reconnu.',
                'amount'        => 800.00,
                'start_date'    => '2026-10-01',
                'end_date'      => '2027-07-31',
                'is_active'     => true,
                'ambassador_code' => 'FR',
            ],

            // Canada (CA)
            [
                'title'         => 'Bourse Vanier Canada',
                'description'   => 'Bourse prestigieuse pour les doctorants démontrant excellence académique et leadership.',
                'requirements'  => 'Admission dans un programme de doctorat dans une université canadienne. GPA minimum de 3.5/4.',
                'amount'        => 4166.67,
                'start_date'    => '2026-09-01',
                'end_date'      => '2027-08-31',
                'is_active'     => true,
                'ambassador_code' => 'CA',
            ],

            // Turquie (TR)
            [
                'title'         => 'Bourse Türkiye Bursları',
                'description'   => 'Programme de bourses du gouvernement turc couvrant les frais de scolarité, l\'hébergement et une allocation mensuelle.',
                'requirements'  => 'Moyenne générale supérieure à 70%. Ouvert à tous les niveaux (Licence, Master, Doctorat).',
                'amount'        => 700.00,
                'start_date'    => '2026-09-15',
                'end_date'      => '2027-06-15',
                'is_active'     => true,
                'ambassador_code' => 'TR',
            ],

            // Allemagne (DE)
            [
                'title'         => 'Bourse DAAD',
                'description'   => 'Bourse du Service Allemand d\'Échanges Académiques pour les étudiants en Master et chercheurs.',
                'requirements'  => 'Licence terminée. Compétences en allemand ou anglais (B2 minimum).',
                'amount'        => 934.00,
                'start_date'    => '2026-10-01',
                'end_date'      => '2027-09-30',
                'is_active'     => true,
                'ambassador_code' => 'DE',
            ],

            // Expired scholarship
            [
                'title'         => 'Programme d\'échange hivernal Allemagne',
                'description'   => 'Programme d\'échange court pour le semestre d\'hiver 2025.',
                'requirements'  => 'Étudiant en Master. Niveau B1 en allemand.',
                'amount'        => 500.00,
                'start_date'    => '2025-10-01',
                'end_date'      => '2026-02-28',
                'is_active'     => false,
                'ambassador_code' => 'DE',
            ],
        ];

        foreach ($scholarships as $data) {
            $ambassadorCode = $data['ambassador_code'];
            unset($data['ambassador_code']);

            $ambassador = Ambassador::where('code', $ambassadorCode)->first();
            $data['ambassador_id'] = $ambassador?->id;

            Scholarship::create($data);
        }
    }
}
