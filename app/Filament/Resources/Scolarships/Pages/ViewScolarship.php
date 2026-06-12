<?php

namespace App\Filament\Resources\Scolarships\Pages;

use App\Filament\Resources\Scolarships\ScolarshipResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewScolarship extends ViewRecord
{
    protected static string $resource = ScolarshipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
