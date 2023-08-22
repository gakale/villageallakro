<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffreEmploiResource\Pages;
use App\Filament\Resources\OffreEmploiResource\RelationManagers;
use App\Models\OffreEmploi;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class OffreEmploiResource extends Resource
{
    protected static ?string $model = OffreEmploi::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre')
                    ->autofocus()
                    ->required()
                    ->placeholder('Titre'),
                Textarea::make('description')
                    ->required()
                    ->placeholder('Description'),
                TextInput::make('lieu')
                    ->required()
                    ->placeholder('Lieu'),
                TextInput::make('type_contrat')
                    ->placeholder('Type de contrat'),
                TextInput::make('salaire')
                    ->required()
                    ->placeholder('Salaire'),
                DateTimePicker::make('date_debut')
                    ->required()
                    ->placeholder('Date de début'),
                DateTimePicker::make('date_fin')
                    ->required()
                    ->placeholder('Date de fin'),
                Select::make('acteur_id')
                    ->relationship('acteur', 'nom')
                    ->required()
                    ->placeholder('Qui offre l\'emploi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lieu')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type_contrat')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salaire')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_debut')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_fin')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('acteur_id')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListOffreEmplois::route('/'),
            'create' => Pages\CreateOffreEmploi::route('/create'),
            'edit' => Pages\EditOffreEmploi::route('/{record}/edit'),
        ];
    }
}
