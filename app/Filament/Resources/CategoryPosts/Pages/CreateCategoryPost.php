<?php

namespace App\Filament\Resources\CategoryPosts\Pages;

use App\Filament\Resources\CategoryPosts\CategoryPostResource;
use App\Traits\RedirectIndex;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryPost extends CreateRecord
{
    use RedirectIndex;
    protected static string $resource = CategoryPostResource::class;


}
