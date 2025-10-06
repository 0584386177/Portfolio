<?php

namespace App\Filament\Resources\Software\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Table;

class SoftwareTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Hình ảnh')
                    ->width(100)
                    ->height(100)
                    ->getStateUsing(function ($record) {
                        return $record->thumbnail ? asset('storage/' . $record->thumbnail) : null;
                    }),
                TextColumn::make('name')
                    ->label('Phần mềm'),
                TextColumn::make('name')
                    ->label('Phần mềm'),
                TextColumn::make('version')
                    ->label('Phiên bản'),
                TextColumn::make('file_size')
                    ->label('Dung lượng file')
                    ->getStateUsing(function ($record) {
                        $size = $record->file_size; // giá trị bytes từ DB
            
                        if ($size >= 1024 * 1024) {
                            return round($size / (1024 * 1024), 2) . ' MB';
                        } elseif ($size >= 1024) {
                            return round($size / 1024, 2) . ' KB';
                        } else {
                            return $size . ' bytes';
                        }
                    }),
                ToggleColumn::make('is_active')
                    ->label('Trạng thái')
                    ->toggleable()
                    ->afterStateUpdated(function ($state, $record) {
                        info("Record {$record->id} active: {$state}");
                    }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
