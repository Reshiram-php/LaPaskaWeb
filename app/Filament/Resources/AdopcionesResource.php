<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdopcionesResource\Pages;
use App\Filament\Resources\AdopcionesResource\RelationManagers;
use App\Models\Adopciones;
use App\Models\Animales;
use App\Models\Razas;
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

class AdopcionesResource extends Resource
{
    protected static ?string $model = Adopciones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('animal_id')
                ->label('Animal')
                ->preload()
                ->options(fn(Get $get): Collection => Animales::query()->where('estado_id',1)->orWhere('id',$get('animal_id'))->pluck('nombre','id') )
                ->required(),
                Forms\Components\Select::make('adoptante_id')
                ->Relationship('Adoptantes','cedula')
                ->required(),
                Forms\Components\DatePicker::make('fecha_adopcion')
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
                Tables\Columns\TextColumn::make('adoptante_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_adopcion')
                    ->date()
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
            'index' => Pages\ListAdopciones::route('/'),
            'create' => Pages\CreateAdopciones::route('/create'),
            'edit' => Pages\EditAdopciones::route('/{record}/edit'),
        ];
    }
}
