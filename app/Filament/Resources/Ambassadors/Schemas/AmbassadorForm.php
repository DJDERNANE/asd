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
                TextInput::make('country'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
