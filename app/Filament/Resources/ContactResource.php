<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'User Engagement/Interaction';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\Section::make('Contact Information')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Name')
                                ->required(),
                            Forms\Components\TextInput::make('email')
                                ->label('Email Address')
                                ->email()
                                ->required(),
                            Forms\Components\TextInput::make('phone')
                                ->label('Phone Number')
                                ->tel(),
                        ]),
                    Forms\Components\Section::make('Message Details')
                        ->schema([
                            Forms\Components\TextInput::make('subject')
                                ->label('Subject'),
                            Forms\Components\Textarea::make('message')
                                ->label('Message')
                                ->required()
                                ->columnSpanFull(),
                        ]),
                ])->columnSpan(2), // Group spans 2 columns

                Forms\Components\Group::make([
                    Forms\Components\Section::make('Additional Information')
                        ->schema([
                            Forms\Components\Toggle::make('is_read')
                                ->label('Mark as Read')
                                ->required(),
                            Forms\Components\TextInput::make('service_id')
                                ->label('Service ID')
                                ->numeric(),
                        ]),
                ])->columnSpan(1), // Group spans 1 column
            ])->columns(3); // Main form has 3 columns

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_read')
                    ->boolean(),
                Tables\Columns\TextColumn::make('service.name')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'view' => Pages\ViewContact::route('/{record}'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
