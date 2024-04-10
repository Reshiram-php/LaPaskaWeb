<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonacionesResource\Pages;
use App\Filament\Resources\DonacionesResource\RelationManagers;
use App\Models\Donaciones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonacionesResource extends Resource
{
    protected static ?string $model = Donaciones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Donaciones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('fecha_donacion')
                    ->required(),
                Forms\Components\TextInput::make('donante')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('monto')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fecha_donacion')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('donante')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monto')
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
            'index' => Pages\ListDonaciones::route('/'),
            'create' => Pages\CreateDonaciones::route('/create'),
            'edit' => Pages\EditDonaciones::route('/{record}/edit'),
        ];
    }
}
