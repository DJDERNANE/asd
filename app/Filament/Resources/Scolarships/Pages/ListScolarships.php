<?php

namespace App\Filament\Resources\Scolarships\Pages;

use App\Filament\Resources\Scolarships\ScolarshipResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListScolarships extends ListRecords
{
    protected static string $resource = ScolarshipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
