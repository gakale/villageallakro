<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtisanaleResource\Pages;
use App\Filament\Resources\ArtisanaleResource\RelationManagers;
use App\Models\Artisanale;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RelationSelect;

class ArtisanaleResource extends Resource
{
    protected static ?string $model = Artisanale::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom'),
                Textarea::make('description')
                    ->autofocus()
                    ->required()
                    ->placeholder('Description'),
                TextInput::make('prix')
                    ->autofocus()
                    ->required()
                    ->placeholder('Prix'),
                TextInput::make('categorie')
                    ->autofocus()
                    ->required()
                    ->placeholder('Categorie'),
                TextInput::make('collection')
                    ->autofocus()
                    ->required()
                    ->placeholder('Collection'),
                TextInput::make('etat')
                    ->autofocus()
                    ->required()
                    ->placeholder('Etat'),
                Select::make('statut')
                    ->options([
                        'en attend' => 'En attend',
                        'en vente' => 'En vente',
                    ])
                    ->placeholder('Statut'),
                Select::make('users_id')
                    ->label('users')
                    ->relationship('users', 'name', )
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')->sortable()->searchable()->label('nom'),
                TextColumn::make('description')->sortable()->searchable()->label('description'),
                TextColumn::make('prix')->sortable()->searchable()->label('prix'),
                TextColumn::make('categorie')->sortable()->searchable()->label('categorie'),
                TextColumn::make('collection')->sortable()->searchable()->label('collection'),
                TextColumn::make('etat')->sortable()->searchable()->label('etat'),
                TextColumn::make('statut')->sortable()->searchable()->label('statut'),
                TextColumn::make('acteur.nom')->sortable()->searchable()->label('Auteurs'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListArtisanales::route('/'),
            'create' => Pages\CreateArtisanale::route('/create'),
            'edit' => Pages\EditArtisanale::route('/{record}/edit'),
        ];
    }
}
