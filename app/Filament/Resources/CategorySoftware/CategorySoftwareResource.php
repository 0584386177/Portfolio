<?php

namespace App\Filament\Resources\CategorySoftware;

use App\Filament\Resources\CategorySoftware\Pages\CreateCategorySoftware;
use App\Filament\Resources\CategorySoftware\Pages\EditCategorySoftware;
use App\Filament\Resources\CategorySoftware\Pages\ListCategorySoftware;
use App\Filament\Resources\CategorySoftware\Schemas\CategorySoftwareForm;
use App\Filament\Resources\CategorySoftware\Tables\CategorySoftwareTable;
use App\Models\CategorySoftware;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategorySoftwareResource extends Resource
{
    protected static ?string $model = CategorySoftware::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CategorySoftwareForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategorySoftwareTable::configure($table);
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
            'index' => ListCategorySoftware::route('/'),
            'create' => CreateCategorySoftware::route('/create'),
            'edit' => EditCategorySoftware::route('/{record}/edit'),
        ];
    }
}
