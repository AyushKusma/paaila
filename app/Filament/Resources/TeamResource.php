<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $label = 'Instructors';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Team/Administration';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\Section::make('Basic Details')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Name')
                                ->required(),
                            Forms\Components\TextInput::make('position')
                                ->label('Position')
                                ->required(),
                        ])->columns(2),
                    Forms\Components\Section::make('Social Media')
                        ->schema([
                            Forms\Components\TextInput::make('facebook')
                                ->label('Facebook'),
                            Forms\Components\TextInput::make('twitter')
                                ->label('Twitter'),
                            Forms\Components\TextInput::make('instagram')
                                ->label('Instagram'),
                            Forms\Components\TextInput::make('whatsapp')
                                ->label('WhatsApp'),
                        ])->columns(2)->collapsed(),
                ])->columnSpan(2),


                Forms\Components\Section::make('Media Upload')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Profile Image')
                            ->image()
                            ->required()
                            ->directory('media/uploads/teams'),
                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('twitter')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('instagram')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'view' => Pages\ViewTeam::route('/{record}'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
