<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductosResource\Pages;
use App\Filament\Resources\ProductosResource\RelationManagers;
use App\Models\Productos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductosResource extends Resource
{
    protected static ?string $model = Productos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Productos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('precio')
                    ->required()
                    ->numeric()->minValue(0),
                    Forms\Components\FileUpload::make('imagen')
                    ->image()
                    ->directory('product-images')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('3:2')
                    ->imageResizeTargetWidth('400')
                    ->imageResizeTargetHeight('400')
                    ->required(),
                Forms\Components\Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('precio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('imagen')
                    ->searchable(),
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
            'index' => Pages\ListProductos::route('/'),
            'create' => Pages\CreateProductos::route('/create'),
            'edit' => Pages\EditProductos::route('/{record}/edit'),
        ];
    }
}
