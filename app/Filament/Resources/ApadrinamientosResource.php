<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApadrinamientosResource\Pages;
use App\Filament\Resources\ApadrinamientosResource\RelationManagers;
use App\Models\Animales;
use App\Models\Apadrinamientos;
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

class ApadrinamientosResource extends Resource
{
    protected static ?string $model = Apadrinamientos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Donaciones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('animal_id')
                ->label('Animal')
                ->preload()
                ->options(fn(Get $get): Collection => Animales::query()->where('estado_id',1)->orWhere('id',$get('animal_id'))->pluck('nombre','id') )
                ->required(),
                Forms\Components\TextInput::make('nombre_apadrinador')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_inicio')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_fin')
                    ->required(),
                    Forms\Components\TextInput::make('valor')
                    ->required()
                    ->numeric()->label('monto')->minValue(0),
                    Forms\Components\Toggle::make('estado')
                    ->required()->label('¿apadrinamiento activo?'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('animal_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre_apadrinador')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_inicio')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_fin')
                    ->date()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('valor')
                    ->numeric()
                    ->sortable()->label('monto'),
                    Tables\Columns\IconColumn::make('estado')
                    ->boolean()->label('activo'),
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
            'index' => Pages\ListApadrinamientos::route('/'),
            'create' => Pages\CreateApadrinamientos::route('/create'),
            'edit' => Pages\EditApadrinamientos::route('/{record}/edit'),
        ];
    }
}
