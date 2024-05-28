<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnimalesResource\Pages;
use App\Filament\Resources\AnimalesResource\Pages\CreateAnimales;
use App\Filament\Resources\AnimalesResource\Pages\EditAnimales;
use App\Filament\Resources\AnimalesResource\Pages\ListAnimales;
use App\Filament\Resources\AnimalesResource\RelationManagers;
use App\Models\Animales;
use App\Models\Razas;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class AnimalesResource extends Resource
{
    protected static ?string $model = Animales::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Animales';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('especie_id')
                    ->label('Especie')
                    ->searchable()
                    ->preload()
                    ->Relationship('Especies', 'especie')
                    ->live()
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('especie')
                            ->required(),
                        ToggleButtons::make('icon')
                            ->options([
                                'fas-dog' => '',
                                'fas-cat' => '',
                                'fas-bat' => '',
                                'fas-bird' => '',
                                'fas-cow' => '',
                                'fas-crab' => '',
                                'fas-deer' => '',
                                'fas-duck' => '',
                                'fas-fish-fins' => '',
                                'fas-frog' => '',
                                'fas-horse' => '',
                                'fas-monkey' => '',
                                'fas-mouse-field' => '',
                                'fas-pig' => '',
                                'fas-rabbit' => '',
                                'fas-raccoon' => '',
                                'fas-sheep' => '',
                                'fas-snake' => '',
                                'fas-spider' => '',
                                'fas-squirrel' => '',
                                'fas-turtle' => ''
                            ])
                            ->icons([
                                'fas-dog' => 'fas-dog',
                                'fas-cat' => 'fas-cat',
                                'fas-bat' => 'fas-bat',
                                'fas-bird' => 'fas-bird',
                                'fas-cow' => 'fas-cow',
                                'fas-crab' => 'fas-crab',
                                'fas-deer' => 'fas-deer',
                                'fas-duck' => 'fas-duck',
                                'fas-fish-fins' => 'fas-fish-fins',
                                'fas-frog' => 'fas-frog',
                                'fas-horse' => 'fas-horse',
                                'fas-monkey' => 'fas-monkey',
                                'fas-mouse-field' => 'fas-mouse-field',
                                'fas-pig' => 'fas-pig',
                                'fas-rabbit' => 'fas-rabbit',
                                'fas-raccoon' => 'fas-raccoon',
                                'fas-sheep' => 'fas-sheep',
                                'fas-snake' => 'fas-snake',
                                'fas-spider' => 'fas-spider',
                                'fas-squirrel' => 'fas-squirrel',
                                'fas-turtle' => 'fas-turtle'
                            ])
                            ->inline()
                    ]),
                Forms\Components\Select::make('raza_id')
                    ->label('Raza')

                    ->preload()
                    ->options(fn (Get $get): Collection => Razas::query()->where('especie_id', $get('especie_id'))->pluck('raza', 'id'))
                    ->disabled(fn ($get) => $get('especie_id') === null)
                    ->createOptionForm(fn (Get $get) => [

                        TextInput::make('raza')->label('raza')->required()->required(),

                        Hidden::make('especie_id')->default($get('especie_id'))->required(),
                    ])

                    ->createOptionUsing(function ($data) {
                        $raza = new Razas();
                        $raza->fill($data);
                        $raza->save();
                        return $raza->getKey();
                    })


                    ->required(),


                Forms\Components\Select::make('estado_id')
                    ->label('Estado')
                    ->Relationship('Estados', 'estado')
                    ->required(),

                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('sexo')
                    ->label('sexo')->options([
                        'macho' => 'macho',
                        'hembra' => 'hembra',
                    ])
                    ->required(),
                Forms\Components\Toggle::make('castrado')
                    ->required()->label('castrado/esterilizada'),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->displayFormat('d/m/Y')
                    ->required()
                    ->reactive()
                    ->minDate(now()->subYears(50))
                    ->maxDate(now())
                    ->afterStateUpdated(function (?string $state, ?string $old, Set $set) {
                        return $set('fecha_refugio', Carbon::parse($state)->toDateTimeString());
                    })
                    ->closeOnDateSelection()
                    ->native(false),
                Forms\Components\DatePicker::make('fecha_refugio')
                    ->required()
                    ->minDate(function (Forms\Get $get) {
                        return \Carbon\Carbon::parse($get('fecha_nacimiento'));
                    })
                    ->closeOnDateSelection()
                    ->native(false),
                Forms\Components\Textarea::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('imagen')
                    ->image()
                    ->directory('animal-images')
                    ->multiple()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('3:2')
                    ->imageResizeTargetWidth('768')
                    ->imageResizeTargetHeight('511')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->numeric()
                ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Estados.estado')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Razas.raza')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Especies.especie')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sexo')
                    ->searchable(),
                Tables\Columns\IconColumn::make('castrado')
                    ->boolean()->label('castrado/esterilizada'),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_refugio')
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
                Action::make('pdf')
                ->icon('heroicon-o-arrow-down-tray')->url(fn(Animales $record)=>route('animal.report',$record))->openUrlInNewTab(),
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
