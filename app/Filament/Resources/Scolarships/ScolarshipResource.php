<?php

namespace App\Filament\Resources\Scolarships;

use App\Filament\Resources\Scolarships\Pages\CreateScolarship;
use App\Filament\Resources\Scolarships\Pages\EditScolarship;
use App\Filament\Resources\Scolarships\Pages\ListScolarships;
use App\Filament\Resources\Scolarships\Pages\ViewScolarship;
use App\Filament\Resources\Scolarships\Schemas\ScolarshipForm;
use App\Filament\Resources\Scolarships\Schemas\ScolarshipInfolist;
use App\Filament\Resources\Scolarships\Tables\ScolarshipsTable;
use App\Models\Scolarship;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScolarshipResource extends Resource
{
    protected static ?string $model = Scolarship::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ScolarshipForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ScolarshipInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ScolarshipsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListScolarships::route('/'),
            'create' => CreateScolarship::route('/create'),
            'view' => ViewScolarship::route('/{record}'),
            'edit' => EditScolarship::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
