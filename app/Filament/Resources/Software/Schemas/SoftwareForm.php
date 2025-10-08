<?php

namespace App\Filament\Resources\Software\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Facades\Auth;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile; // <-- THÊM DÒNG NÀY VÀO
use Filament\Forms\Components\Hidden;

class SoftwareForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    // CỘT BÊN TRÁI (Chứa thông tin chính)
                    Section::make('Thông tin chính')
                        ->schema([
                            // Tên phần mềm (trường name)
                            TextInput::make('name')
                                ->label('Tên phần mềm')
                                ->required()
                                ->maxLength(255)
                                // "live" có nghĩa là slug sẽ được cập nhật ngay khi bạn gõ tên
                                ->live(onBlur: true)
                                // Tự động tạo slug từ name
                                ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                            // Slug (trường slug)
                            TextInput::make('slug')
                                ->label('Đường dẫn (slug)')
                                ->required()
                                ->maxLength(255)
                                // Đảm bảo slug là duy nhất, bỏ qua record hiện tại khi edit
                                ->unique(ignoreRecord: true)
                                ->readOnly(),

                            // Phiên bản (trường version)
                            TextInput::make('version')
                                ->label('Phiên bản')
                                ->maxLength(255),
                            // Mô tả (trường description)
                            RichEditor::make('description')
                                ->label('Mô tả chi tiết')
                                // Yêu cầu field này chiếm toàn bộ chiều rộng của Section
                                ->columnSpanFull(),
                        ])
                        ->columnSpan(2), // Section này chiếm 2/3 chiều rộng grid

                    // CỘT BÊN PHẢI (Chứa các thông tin phụ)
                    Section::make('Thông tin phụ')
                        ->schema([
                            // Chọn người đăng (trường user_id)
                            Select::make('user_id')
                                ->label('Người đăng')
                                // Sử dụng relationship 'user' đã định nghĩa trong Model
                                // Hiển thị cột 'name' của bảng 'users'
                                ->relationship('user', 'name')
                                ->searchable() // Cho phép tìm kiếm user
                                ->required()
                                // Mặc định chọn user đang đăng nhập
                                ->default(Auth::id()),

                            // Trạng thái (trường is_active)
                            Toggle::make('is_active')
                                ->label('Hiển thị công khai')
                                ->required()
                                ->default(true), // Mặc định là bật

                            // Lượt tải (trường download_count)
                            TextInput::make('download_count')
                                ->label('Số lượt tải')
                                ->readOnly() // Chỉ đọc, không cho sửa
                                ->default(0)
                                // Chỉ hiển thị trường này khi đang ở trang Edit
                                ->visibleOn('edit'),

                        ])
                        ->columnSpan(1), // Section này chiếm 1/3 chiều rộng grid
                ]),

                // PHẦN UPLOAD FILE (Nằm riêng bên dưới)
                Section::make('File & Hình ảnh')
                    ->schema([
                        // Upload thumbnail (trường thumbnail)
                        FileUpload::make('thumbnail')
                            ->label('Ảnh đại diện')
                            ->image()
                            ->imagePreviewHeight('150')
                            ->directory('software')
                            ->disk('public')
                            ->visibility('public')
                            ->preserveFilenames()
                            ->imageEditor(), // Cho phép chỉnh sửa ảnh cơ bản
                            

                        // Upload file cài đặt (trường file_path)
                        FileUpload::make('file_path')
                            ->label('File cài đặt (.zip, .rar, .exe...)')
                            ->disk('google') // <-- Sử dụng disk Google Drive
                            ->directory('FILE CÀI ĐẶT PHẦN MỀM/files') // Thư mục lưu trên Drive
                            ->preserveFilenames() // <-- THÊM DÒNG NÀY
                            // CODE MỚI ĐÃ SỬA LỖI
                            ->maxSize(5 * 1024 * 1024) // 5 GB
                            ->afterStateUpdated(function (Set $set, $state) {
                                // Chỉ thực hiện khi $state là một đối tượng UploadedFile
                                if ($state instanceof UploadedFile) {

                                    $set('file_size', $state->getSize());

                                }
                            }),
                        Hidden::make('file_size'),
                    ]),
            ]);
    }
}
