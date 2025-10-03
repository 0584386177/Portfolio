<?php

namespace App\Filament\Resources\CategoryPosts\Pages;

use App\Filament\Resources\CategoryPosts\CategoryPostResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\TextColumn;

class ListCategoryPosts extends ListRecords
{
    protected static string $resource = CategoryPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    
}
