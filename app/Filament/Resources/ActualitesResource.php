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
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\RelationManager as RelationManagerAlias;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\BelongsToPicker;

class ActualitesResource extends Resource
{
    protected static ?string $model = Actualites::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre')->label('Titre')->required(),
                TextInput::make('description')->label('Description')->required(),
                Forms\Components\DatePicker::make('date')->label('Date')->required(),
                TextInput::make('image')->label('Image')->required(),
                Select::make('id_acteur')
                    ->label('Acteur')
                    ->relationship('acteur', 'id_acteur')

                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titre')->sortable()->searchable()->label('Titre'),
                Tables\Columns\TextColumn::make('description')->sortable()->searchable()->label('Description'),
                Tables\Columns\TextColumn::make('date')->sortable()->searchable()->label('Date'),
                Tables\Columns\TextColumn::make('image')->sortable()->searchable()->label('Image'),
                Tables\Columns\TextColumn::make('id_acteur')->sortable()->searchable()->label('Acteur'),
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
