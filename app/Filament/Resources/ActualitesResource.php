<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActualitesResource\Pages;
use App\Filament\Resources\ActualitesResource\RelationManagers;
use App\Models\Actualites;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\BelongsToPicker;
use Filament\Tables\Columns\TextColumn;


class ActualitesResource extends Resource
{
    protected static ?string $model = Actualites::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre')->label('Titre')->required(),
                Forms\Components\FileUpload::make('image')->label('Image')->required()
                    ->image()
                    ->acceptedFileTypes(['image/*'])
                    ->directory('actualites'),
                Select::make('categorie')->label('Catégorie')->options([
                    'Actualité' => 'Actualité',
                    'Evénement' => 'Evénement',
                ])->required(),
                Forms\Components\DatePicker::make('date_publication')->label('Date')->required(),
                Forms\Components\TextInput::make('statut')->label('Status')->required(),
                Select::make('acteur_id')
                    ->label('Acteur')
                    ->relationship('acteur', 'nom', )
                    ->required(),
                Forms\Components\Card::make([
                    Forms\Components\RichEditor::make('contenu')->label('Contenu')->required(),
                ])->label('Contenu'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titre')->sortable()->searchable()->label('Titre'),
                TextColumn::make('date_publication')->sortable()->searchable()->label('Date de publication'),
                TextColumn::make('image')->sortable()->searchable()->label('Image'),
                TextColumn::make('acteur.nom')->sortable()->searchable()->label('Auteurs'),
                TextColumn::make('statut')
                   ->label('Statut'),
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
            'index' => Pages\ListActualites::route('/'),
            'create' => Pages\CreateActualites::route('/create'),
            'edit' => Pages\EditActualites::route('/{record}/edit'),
        ];
    }
}
