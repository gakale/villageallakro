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

class ActualitesResource extends Resource
{
    protected static ?string $model = Actualites::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre')->label('Titre')->required(),
                Forms\Components\Card::make([
                    Forms\Components\RichEditor::make('contenu')->label('Contenu')->required(),
                ])->label('Contenu'),
                Forms\Components\FileUpload::make('image')->label('Image')->required()
                    ->image()
                    ->acceptedFileTypes(['image/*'])
                    ->directory('actualites'),
                Select::make('categorie')->label('Catégorie')->options([
                    'Actualité' => 'Actualité',
                    'Evénement' => 'Evénement',
                ])->required(),
                Forms\Components\DatePicker::make('date_publication')->label('Date')->required(),
                Forms\Components\TextInput::make('status')->label('Status')->required(),
                Select::make('id_acteur')
                    ->label('Acteur')
                    ->relationship('acteur', 'nom', )
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titre')->sortable()->searchable()->label('Titre'),
                Tables\Columns\TextColumn::make('contenu')->searchable()->label('Contenu'),
                Tables\Columns\TextColumn::make('date_publication')->sortable()->searchable()->label('Date'),
                Tables\Columns\TextColumn::make('image')->sortable()->searchable()->label('Image'),
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->label('Acteur'),
                Tables\Columns\TextColumn::make('statut')->searchable()->label('Statut'),
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
