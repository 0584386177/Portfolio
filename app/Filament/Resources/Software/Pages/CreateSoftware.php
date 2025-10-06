<?php

namespace App\Filament\Resources\Software\Pages;

use App\Filament\Resources\Software\SoftwareResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateSoftware extends CreateRecord
{
    protected static string $resource = SoftwareResource::class;

    protected function beforeSave(): void
    {

        $filePath = $this->data['file_path'] ?? null;

        if ($filePath) {
            $disk = Storage::disk('google');
            if ($disk->exists($filePath)) {
                $this->data['file_size'] = $disk->size($filePath);
            } else {
                $this->data['file_size'] = 'unknown';
            }
        }
    }

}
