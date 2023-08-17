<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActeurResource\Pages;
use App\Filament\Resources\ActeurResource\RelationManagers;
use App\Models\Acteur;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActeurResource extends Resource
{
    protected static ?string $model = Acteur::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')->label('Nom de l\'acteur')->required(),
                TextInput::make('prenom')->label('Prénom de l\'acteur')->required(),
                Select::make('sexe')->label('Sexe')->options([
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ])->required(),
                Forms\Components\DatePicker::make('date_naissance')->label('Date de naissance')->required(),
                TextInput::make('nationalite')->label('Nationalité')->required(),
                TextInput::make('niveau_etude')->label('Niveau d\'étude')->required(),
                TextInput::make('adresse')->label('Adresse')->required(),
                TextInput::make('telephone')->label('Téléphone')->required()->tel(), // Ajout de la méthode tel()
                TextInput::make('email')->label('Email')->required()->email(),
                TextInput::make('nbre_enfant')->label('Nombre d\'enfants')->required(),
                TextInput::make('profession')->label('Profession')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_acteur')->sortable()->searchable()->label('ID'),
                Tables\Columns\TextColumn::make('nom')->sortable()->searchable()->label('Nom de l\'acteur'),
                Tables\Columns\TextColumn::make('prenom')->label('Prénom de l\'acteur'),
                Tables\Columns\TextColumn::make('sexe')->label('Sexe'),
                Tables\Columns\TextColumn::make('date_naissance')->label('Date de naissance'),
                Tables\Columns\TextColumn::make('nationalite')->label('Nationalité'),
                Tables\Columns\TextColumn::make('niveau_etude')->label('Niveau d\'étude'),
                Tables\Columns\TextColumn::make('adresse')->label('Adresse'),
                Tables\Columns\TextColumn::make('telephone')->label('Téléphone'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('nbre_enfant')->label('Nombre d\'enfants'),
                Tables\Columns\TextColumn::make('profession')->label('Profession'),
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
            'index' => Pages\ListActeurs::route('/'),
            'create' => Pages\CreateActeur::route('/create'),
            'edit' => Pages\EditActeur::route('/{record}/edit'),
        ];
    }
}
