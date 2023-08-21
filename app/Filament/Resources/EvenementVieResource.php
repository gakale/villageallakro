<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvenementVieResource\Pages;
use App\Filament\Resources\EvenementVieResource\RelationManagers;
use App\Models\EvenementVie;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvenementVieResource extends Resource
{
    protected static ?string $model = EvenementVie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->label('Evenement Vie')
                    ->placeholder('Choisir un evenement vie')
                    ->options([
                        'naissance' => 'Naissance',
                        'decès' => 'Décès',
                        'mariage' => 'Mariage',
                    ])
                    ->required(),
                Forms\Components\Card::make([
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->required(),
                ]),
                Forms\Components\DatePicker::make('Date'),
                Forms\Components\TextInput::make('lieu')
                    ->label('Lieu')
                    ->required(),
                Forms\Components\Select::make('statut')->label('Statut')
                    ->placeholder('Choisir un statut')
                    ->options([
                        'draft' => 'Draft',
                        'approved' => 'Approved',
                    ])
                    ->required(),

                Forms\Components\Select::make('acteur_id')
                    ->label('Acteur concerné')
                    ->placeholder('Choisir une personne')
                    ->relationship('acteur', 'nom'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextInputColumn::make('type')
                    ->label('Evenement Vie')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Date')
                    ->label('Date')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lieu')
                    ->label('Lieu')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('statut')
                    ->label('Statut')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('acteur_id')

                    ->label('Acteur concerné')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListEvenementVies::route('/'),
            'create' => Pages\CreateEvenementVie::route('/create'),
            'edit' => Pages\EditEvenementVie::route('/{record}/edit'),
        ];
    }
}
