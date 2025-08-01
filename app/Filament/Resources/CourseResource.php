<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Filament\Resources\CourseResource\RelationManagers\InstructorsRelationManager;
use App\Models\Category;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // General Information Section
                Group::make()->schema([
                    Forms\Components\Section::make('General Information')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Name')
                                ->required()
                                ->maxLength(255),

                            Forms\Components\Select::make('category_id')
                                ->label('Category')
                                ->relationship('category', 'name', fn(Builder $query) => $query->where('category_id', Category::where('slug', 'course')->value('id')))
                                ->native(false)
                                ->required(),

                            Forms\Components\TextInput::make('duration')
                                ->label('Duration')
                                ->required()
                                ->maxLength(255),

                            Forms\Components\TextInput::make('level')
                                ->label('Level')
                                ->required()
                                ->maxLength(255),
                        ])
                        ->collapsible(),

                    // Content Section
                    Forms\Components\Section::make('Content')
                        ->schema([
                            Forms\Components\RichEditor::make('description')
                                ->label('Description')
                                ->required()
                                ->fileAttachmentsDisk('public')
                                ->fileAttachmentsDirectory('media/courses')
                                ->fileAttachmentsVisibility('private'),
                        ])
                        ->collapsed(),

                    // Meta Section
                    Forms\Components\Section::make('Meta')
                        ->schema([
                            Forms\Components\Textarea::make('meta_title')
                                ->label('Meta Title'),
                            Forms\Components\Textarea::make('meta_keywords')
                                ->label('Meta Keywords'),
                            Forms\Components\RichEditor::make('meta_description')
                                ->label('Meta Description')
                                ->toolbarButtons([
                                    'blockquote',
                                    'bold',
                                    'h2',
                                    'h3',
                                    'italic',
                                    'redo',
                                    'strike',
                                    'underline',
                                    'undo',
                                ]),
                        ])
                        ->collapsed(),
                ])->columnSpan(2),

                // Media Section
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->directory('media/uploads/courses')
                            ->image()
                            ->required(),
                    ])
                    ->collapsible()
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->sortable(),
                Tables\Columns\TextColumn::make('level')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            InstructorsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'view' => Pages\ViewCourse::route('/{record}'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
