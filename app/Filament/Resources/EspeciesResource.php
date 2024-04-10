<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EspeciesResource\Pages;
use App\Filament\Resources\EspeciesResource\RelationManagers;
use App\Models\Especies;
use Filament\Forms;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EspeciesResource extends Resource
{
    protected static ?string $model = Especies::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Animales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('especie')
                    ->required()
                    ->maxLength(255),
                    ToggleButtons::make('icon')
                    ->options([
                        'fas-dog'=>'',
                        'fas-cat'=>'',
                        'fas-bat'=>'',
                        'fas-bird'=>'',
                        'fas-cow'=>'',
                        'fas-crab'=>'',
                        'fas-deer'=>'',
                        'fas-duck'=>'',
                        'fas-fish-fins'=>'',
                        'fas-frog'=>'',
                        'fas-horse'=>'',
                        'fas-monkey'=>'',
                        'fas-mouse-field'=>'',
                        'fas-pig'=>'',
                        'fas-rabbit'=>'',
                        'fas-raccoon'=>'',
                        'fas-sheep'=>'',
                        'fas-snake'=>'',
                        'fas-spider'=>'',
                        'fas-squirrel'=>'',
                        'fas-turtle'=>''
                    ])
                    ->icons([
                        'fas-dog'=>'fas-dog',
                        'fas-cat'=>'fas-cat',
                        'fas-bat'=>'fas-bat',
                        'fas-bird'=>'fas-bird',
                        'fas-cow'=>'fas-cow',
                        'fas-crab'=>'fas-crab',
                        'fas-deer'=>'fas-deer',
                        'fas-duck'=>'fas-duck',
                        'fas-fish-fins'=>'fas-fish-fins',
                        'fas-frog'=>'fas-frog',
                        'fas-horse'=>'fas-horse',
                        'fas-monkey'=>'fas-monkey',
                        'fas-mouse-field'=>'fas-mouse-field',
                        'fas-pig'=>'fas-pig',
                        'fas-rabbit'=>'fas-rabbit',
                        'fas-raccoon'=>'fas-raccoon',
                        'fas-sheep'=>'fas-sheep',
                        'fas-snake'=>'fas-snake',
                        'fas-spider'=>'fas-spider',
                        'fas-squirrel'=>'fas-squirrel',
                        'fas-turtle'=>'fas-turtle'
                    ])
                    ->inline()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('especie')
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
            'index' => Pages\ListEspecies::route('/'),
            'create' => Pages\CreateEspecies::route('/create'),
            'edit' => Pages\EditEspecies::route('/{record}/edit'),
        ];
    }
}
