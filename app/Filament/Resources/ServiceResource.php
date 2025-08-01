<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Category;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';
    protected static ?string $navigationGroup = 'Content Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\Section::make('Basic Information')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Name')
                                ->required(),
                        ]),
                    Forms\Components\Section::make('Details')
                        ->schema([
                            Forms\Components\Textarea::make('summary')
                                ->label('Summary')->required(),
                            Forms\Components\RichEditor::make('description')
                                ->label('Description')
                                ->required()
                                ->fileAttachmentsDisk('public')
                                ->fileAttachmentsDirectory('media/services')
                                ->fileAttachmentsVisibility('private'),
                        ]),
                    Forms\Components\Section::make('Meta')
                        ->schema([
                            Forms\Components\Textarea::make('meta_title')
                                ->label('Meta Title'),
                            Forms\Components\Textarea::make('meta_keywords')
                                ->label('Meta Keywords'),

                            Forms\Components\RichEditor::make('meta_description')
                                ->label('Meta Description')->toolbarButtons([
                                    'blockquote',
                                    'bold',
                                    'h2',
                                    'h3',
                                    'italic',
                                    'redo',
                                    'strike',
                                    'underline',
                                    'undo',
                                ])
                        ])
                        ->collapsed(), // Collapsible section
                ])->columnSpan(2),
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('media/uploads/services'),
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
                Tables\Columns\TextColumn::make('summary')
                    ->searchable()->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'view' => Pages\ViewService::route('/{record}'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
