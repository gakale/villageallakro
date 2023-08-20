<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CentreSanteResource\Pages;
use App\Filament\Resources\CentreSanteResource\RelationManagers;
use App\Models\CentreSante;
use App\Models\ServiceSante;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use http\Exception\BadConversionException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CentreSanteResource extends Resource
{
    protected static ?string $model = CentreSante::class;

    protected static ?string $models = ServiceSante::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';
    protected static ?string $navigationGroup = 'Gestion de Santé';

    public static function form(Form $form): Form
    {
        $services = ServiceSante::all();
        $options = $services->pluck('nom')->toArray();

        return $form
            ->schema([

                TextInput::make('nom')->label('Nom du centre de santé')->required(),
                TextInput::make('adresse')->label('Adresse')->required(),
                TextInput::make('telephone')->label('Téléphone')->required()->tel(), // Ajout de la méthode tel()
                TextInput::make('email')->label('Email')->required()->email(),
                Select::make('lesservices')
                    ->label('Service')
                    ->options($options)
                    ->default(null)
                    ->required(),

                Forms\Components\Card::make([
                    Textarea::make('description')->label('Description')->required(),
                ])

            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->label('ID'),
                Tables\Columns\TextColumn::make('nom')->sortable()->searchable()->label('Nom du centre de santé'),
                Tables\Columns\TextColumn::make('adresse')->sortable()->searchable()->label('Adresse'),
                Tables\Columns\TextColumn::make('telephone')->sortable()->searchable()->label('Téléphone'),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable()->label('Email'),
                Tables\Columns\TextColumn::make('description')->sortable()->searchable()->label('Description'),
                Tables\Columns\TextColumn::make('lesservices')->sortable()->searchable()->label('Service'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCentreSantes::route('/'),
            'create' => Pages\CreateCentreSante::route('/create'),
            'edit' => Pages\EditCentreSante::route('/{record}/edit'),
        ];
    }
}
