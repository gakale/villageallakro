<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PharmacieResource\Pages;
use App\Filament\Resources\PharmacieResource\RelationManagers;
use App\Models\Pharmacie;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
class PharmacieResource extends Resource
{
    protected static ?string $model = Pharmacie::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Gestion de Santé';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('nom')->label('Nom de la pharmacie')->required(),
                TextInput::make('adresse')->label('Adresse')->required(),
                TextInput::make('telephone')->label('Téléphone')->required()->tel(), // Ajout de la méthode tel()
                TextInput::make('email')->label('Email')->required()->email(),
                Forms\Components\DateTimePicker::make('horaire_ouverture')->label('Horaire D\'ouverture')->required(),
                Forms\Components\DateTimePicker::make('horaire_fermeture')->label('Horaire de fermeture')->required(),
                Forms\Components\FileUpload::make('image')->label('Image de la pharmacie')->image()->directory('pharmacies')->required(),
                TextInput::make('responsable')->label('Responsable de la pharmacie')->required(),
                Select::make('id_centre_sante')
                    ->label('Centre de santé')
                    ->relationship('CentreSante', 'nom')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->label('ID'),
                Tables\Columns\TextColumn::make('nom')->sortable()->searchable()->label('Nom de la pharmacie'),
                Tables\Columns\TextColumn::make('adresse')->label('Adresse'),
                Tables\Columns\TextColumn::make('telephone')->label('Téléphone'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('horaire_ouverture')->label('Horaire D\'ouverture'),
                Tables\Columns\TextColumn::make('horaire_fermeture')->label('Horaire de fermeture'),
                Tables\Columns\TextColumn::make('image')->label('Image de la pharmacie'),
                Tables\Columns\TextColumn::make('responsable')->label('Responsable de la pharmacie'),
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
            'index' => Pages\ListPharmacies::route('/'),
            'create' => Pages\CreatePharmacie::route('/create'),
            'edit' => Pages\EditPharmacie::route('/{record}/edit'),
        ];
    }
}
