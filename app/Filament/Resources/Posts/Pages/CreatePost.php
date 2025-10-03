<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use App\Traits\RedirectIndex;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    use RedirectIndex;
    protected static string $resource = PostResource::class;
}
