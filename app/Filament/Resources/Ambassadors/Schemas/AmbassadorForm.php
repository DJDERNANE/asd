<?php

namespace App\Filament\Resources\Ambassadors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AmbassadorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('code')
                    ->required(),
                TextInput::make('ambassador_name'),
                TextInput::make('ambassador_email')
                    ->email(),
                Select::make('country')
                    ->options([
                        'usa' => 'United States',
                        'canada' => 'Canada',
                        'uk' => 'United Kingdom',
                        'australia' => 'Australia',
                        'germany' => 'Germany',
                        'france' => 'France',
                        'italy' => 'Italy',
                        'spain' => 'Spain',
                        'japan' => 'Japan',
                        'china' => 'China',
                        'india' => 'India',
                        'brazil' => 'Brazil',
                        'russia' => 'Russia',
                        'mexico' => 'Mexico',
                        'south_africa' => 'South Africa',
                        'nigeria' => 'Nigeria',
                        'egypt' => 'Egypt',
                        'saudi_arabia' => 'Saudi Arabia',
                        'uae' => 'United Arab Emirates',
                        'switzerland' => 'Switzerland',
                        'sweden' => 'Sweden',
                        'norway' => 'Norway',
                        'denmark' => 'Denmark',
                        'finland' => 'Finland',
                        'netherlands' => 'Netherlands',
                        'belgium' => 'Belgium',
                        'austria' => 'Austria',
                        'poland' => 'Poland',
                        'ireland' => 'Ireland',
                        'portugal' => 'Portugal',
                        'greece' => 'Greece',
                        'turkey' => 'Turkey',
                        'israel' => 'Israel',
                        'south_korea' => 'South Korea',
                        'new_zealand' => 'New Zealand',
                        'chile' => 'Chile',
                        'colombia' => 'Colombia',
                        'peru' => 'Peru',
                        'argentina' => 'Argentina',
                        'hungary' => 'Hungary',
                        'czech_republic' => 'Czech Republic',
                        'romania' => 'Romania',
                        'philippines' => 'Philippines',
                        'thailand' => 'Thailand',
                        'malaysia' => 'Malaysia',
                        'singapore' => 'Singapore',
                    ]),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
