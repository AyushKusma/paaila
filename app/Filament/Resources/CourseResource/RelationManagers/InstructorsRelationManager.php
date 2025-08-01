<?php

namespace App\Filament\Resources\CourseResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class InstructorsRelationManager extends RelationManager
{
    protected static string $relationship = 'instructors';

    // Customize the plural and singular labels
    protected static ?string $pluralModelLabel = 'Instructors';
    protected static ?string $modelLabel = 'Instructor';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->label('Attach Instructor'),
            ])
            ->actions([
                Tables\Actions\DetachAction::make()
                    ->label('Detach Instructor'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make()
                        ->label('Detach Instructors'),
                ]),
            ]);
    }
}
