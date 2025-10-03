<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\CategoryPost;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Tiêu đề')
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn(Set $set, ?string $state)
                        => $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->label('Slug')
                    ->readOnly(),
                Select::make('category_id')
                    ->label('Chọn danh mục')
                    ->options(CategoryPost::all()->pluck('name', 'id'))
                    ->searchable(),
                TextInput::make('user_id')
                    ->label('Người tạo')
                    ->default(Auth::id())
                    ->readOnly(),
                Textarea::make('short_description')
                    ->label('Mô tả ngắn'),
                FileUpload::make('thumbnail')
                    ->label('Ảnh thumbnail')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->directory('posts')
                    ->disk('public')
                    ->preserveFilenames()
                    ->imageEditor(),
                RichEditor::make('description')
                    ->label('Nội dung chi tiết')
                    ->columnSpanFull()
                    ->placeholder('Nhập bài viết hoặc nội dung chi tiết tại đây...')
                    ->extraAttributes([
                        'style' => 'min-height:200px;', // chiều cao tối thiểu 300px
                    ])
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('posts')
                    ->fileAttachmentsVisibility('public')
            ]);
    }
}
