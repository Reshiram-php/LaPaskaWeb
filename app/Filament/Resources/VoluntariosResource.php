<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VoluntariosResource\Pages;
use App\Filament\Resources\VoluntariosResource\RelationManagers;
use App\Models\Voluntarios;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VoluntariosResource extends Resource
{
    protected static ?string $model = Voluntarios::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('direccion')
                    ->required()
                    ->columnSpanFull(),
                    Forms\Components\TextInput::make('cargo')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\FileUpload::make('imagen')
                    ->image()
                    ->directory('team-images')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('3:2')
                    ->imageResizeTargetWidth('300')
                    ->imageResizeTargetHeight('200'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
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
            'index' => Pages\ListVoluntarios::route('/'),
            'create' => Pages\CreateVoluntarios::route('/create'),
            'edit' => Pages\EditVoluntarios::route('/{record}/edit'),
        ];
    }
}
