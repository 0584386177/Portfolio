<?php

namespace App\Filament\Resources\CategorySoftware\Pages;

use App\Filament\Resources\CategorySoftware\CategorySoftwareResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCategorySoftware extends EditRecord
{
    protected static string $resource = CategorySoftwareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
