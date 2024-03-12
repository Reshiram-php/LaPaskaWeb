<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnimalesResource\Pages;
use App\Filament\Resources\AnimalesResource\Pages\CreateAnimales;
use App\Filament\Resources\AnimalesResource\Pages\EditAnimales;
use App\Filament\Resources\AnimalesResource\Pages\ListAnimales;
use App\Filament\Resources\AnimalesResource\RelationManagers;
use App\Models\Animales;
use App\Models\Razas;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class AnimalesResource extends Resource
{
    protected static ?string $model = Animales::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('especie_id')
                ->label('Especie')
                ->searchable()
                ->preload()
                ->Relationship('Especies','especie')
                ->live()
                ->required()
                ->createOptionForm([
                    Forms\Components\TextInput::make('especie')
                        ->required(),
                ]),
                Forms\Components\Select::make('raza_id')
                ->label('Raza')

                ->preload()
                ->options(fn(Get $get): Collection => Razas::query()->where('especie_id',$get('especie_id'))->pluck('raza','id') )
                ->disabled(fn($get) => $get('especie_id') === null)
                ->createOptionForm(fn(Get $get)=>[

                    TextInput::make('raza')->label('raza')->required()->required(),

                    Hidden::make('especie_id')->default($get('especie_id'))->required(),
                ])

                ->createOptionUsing(function($data){
                    $raza = new Razas();
                    $raza->fill($data);
                    $raza->save();
                    return $raza->getKey();
                })


                ->required(),


                Forms\Components\Select::make('estado_id')
                ->label('Estado')
                ->Relationship('Estados','estado')
                ->required(),

                Forms\Components\TextInput::make('nombre')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('sexo')
                ->required()
                ->maxLength(255),
            Forms\Components\Toggle::make('castrado')
                ->required(),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_refugio')
                    ->required(),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('imagen')

                    ->image()
                    ->imageEditor()
                    ->directory('animal-images')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Estados.estado')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Razas.raza')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Especies.especie')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('imagen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sexo')
                    ->searchable(),
                Tables\Columns\IconColumn::make('castrado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_refugio')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('descripcion')
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
            'index' => Pages\ListAnimales::route('/'),
            'create' => Pages\CreateAnimales::route('/create'),
            'edit' => Pages\EditAnimales::route('/{record}/edit'),
        ];
    }

}
