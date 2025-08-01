<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

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
                                ->required(),

                            Forms\Components\Select::make('category_id')
                                ->label('Category')
                                ->relationship('category', 'name', fn(Builder $query) => $query->where('category_id', Category::where('slug', 'blog')->value('id')),)
                                ->native(false)
                                ->required(),
                        ])->collapsible(),

                    // Content Section
                    Forms\Components\Section::make('Content')
                        ->schema([
                            Forms\Components\Textarea::make('summary')
                                ->label('Summary')->required(),

                            Forms\Components\RichEditor::make('description')
                                ->label('Description')
                                ->required()
                                ->fileAttachmentsDisk('public')
                                ->fileAttachmentsDirectory('media/blogs')
                                ->fileAttachmentsVisibility('private'),
                        ])
                        ->collapsed(), // Collapsible section

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


                // Media Section
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->directory('media/uploads/blogs')
                            ->image()
                            ->required(),
                    ])->collapsible()->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),

                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')->searchable(),
                Tables\Columns\TextColumn::make('summary')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make(
                    [
                        Tables\Actions\ViewAction::make(),
                        Tables\Actions\EditAction::make(),
                        Tables\Actions\DeleteAction::make(),
                    ]
                ),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'view' => Pages\ViewBlog::route('/{record}'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
