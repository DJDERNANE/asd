<?php

namespace Database\Seeders;

use App\Models\Ambassador;
use Illuminate\Database\Seeder;

class AmbassadorSeeder extends Seeder
{
    public function run(): void
    {
        $ambassadors = [
            [
                'name'             => 'Ambassade de France',
                'code'             => 'FR',
                'ambassador_name'  => 'Jean Dupont',
                'ambassador_email' => 'jean.dupont@ambassade-fr.dz',
                'country'          => 'France',
                'is_active'        => true,
            ],
            [
                'name'             => 'Ambassade du Canada',
                'code'             => 'CA',
                'ambassador_name'  => 'Marie Tremblay',
                'ambassador_email' => 'marie.tremblay@ambassade-ca.dz',
                'country'          => 'Canada',
                'is_active'        => true,
            ],
            [
                'name'             => 'Ambassade de Turquie',
                'code'             => 'TR',
                'ambassador_name'  => 'Ahmet Yılmaz',
                'ambassador_email' => 'ahmet.yilmaz@ambassade-tr.dz',
                'country'          => 'Turquie',
                'is_active'        => true,
            ],
            [
                'name'             => 'Ambassade d\'Allemagne',
                'code'             => 'DE',
                'ambassador_name'  => 'Klaus Müller',
                'ambassador_email' => 'klaus.muller@ambassade-de.dz',
                'country'          => 'Allemagne',
                'is_active'        => true,
            ],
            [
                'name'             => 'Ambassade des États-Unis',
                'code'             => 'US',
                'ambassador_name'  => 'John Smith',
                'ambassador_email' => 'john.smith@ambassade-us.dz',
                'country'          => 'États-Unis',
                'is_active'        => false,
            ],
        ];

        foreach ($ambassadors as $ambassador) {
            Ambassador::create($ambassador);
        }
    }
}
