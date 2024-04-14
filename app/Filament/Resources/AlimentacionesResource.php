<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlimentacionesResource\Pages;
use App\Filament\Resources\AlimentacionesResource\RelationManagers;
use App\Models\Alimentaciones;
use App\Models\Animales;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class AlimentacionesResource extends Resource
{
    protected static ?string $model = Alimentaciones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Cuidados';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('animal_id')
                    ->label('Animal')
                    ->preload()
                    ->options(fn (Get $get): Collection => Animales::query()->where('estado_id', '!=', 3)->pluck('nombre', 'id'))
                    ->required(),
                Forms\Components\DatePicker::make('fecha_alimentacion')
                    ->required(),
                Forms\Components\TextInput::make('alimento')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cantidad')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('animal_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Animales.nombre')
                    ->sortable()->label('Nombre'),
                Tables\Columns\TextColumn::make('fecha_alimentacion')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('alimento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cantidad')
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
            'index' => Pages\ListAlimentaciones::route('/'),
            'create' => Pages\CreateAlimentaciones::route('/create'),
            'edit' => Pages\EditAlimentaciones::route('/{record}/edit'),
        ];
    }
}
