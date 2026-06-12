<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DatePicker::make('birth_date'),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('wilaya'),
                TextInput::make('university'),
                TextInput::make('study_level'),
                TextInput::make('field_of_study'),
            ]);
    }
}
