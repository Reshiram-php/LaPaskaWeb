<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CuidadosResource\Pages;
use App\Filament\Resources\CuidadosResource\RelationManagers;
use App\Models\Animales;
use App\Models\Cuidados;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class CuidadosResource extends Resource
{
    protected static ?string $model = Cuidados::class;

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
                Forms\Components\TextInput::make('tipo_cuidado')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_cuidado')
                    ->required(),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('costo')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('check')
                    ->required(),
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
                    Tables\Columns\TextColumn::make('Animales')
                    ->getStateUsing(function (Model $record) : string {
                       return $record->animales->especies->especie;
                    })->label('Especie'),

                Tables\Columns\TextColumn::make('tipo_cuidado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_cuidado')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('costo')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('check')
                    ->boolean(),
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
            'index' => Pages\ListCuidados::route('/'),
            'create' => Pages\CreateCuidados::route('/create'),
            'edit' => Pages\EditCuidados::route('/{record}/edit'),
        ];
    }
}
