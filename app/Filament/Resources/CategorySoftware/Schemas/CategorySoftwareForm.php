<?php

namespace App\Filament\Resources\CategorySoftware\Schemas;

use App\Models\CategorySoftware;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategorySoftwareForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Tên danh mục')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))


                ,
                TextInput::make('slug')
                    ->readOnly()
                ,
                Select::make('parent_id')->label('Danh mục cha')->options(CategorySoftware::pluck('name', 'id'))->searchable()->nullable(),
            ]);
    }
}
