<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CentreSanteResource\Pages;
use App\Filament\Resources\CentreSanteResource\RelationManagers;
use App\Models\CentreSante;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CentreSanteResource extends Resource
{
    protected static ?string $model = CentreSante::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';
    protected static ?string $navigationGroup = 'Gestion de Santé';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')->label('Nom du centre de santé')->required(),
                Forms\Components\TextInput::make('adresse')->label('Adresse')->required(),
                Forms\Components\TextInput::make('telephone')->label('Téléphone')->required()->tel(), // Ajout de la méthode tel()
                Forms\Components\TextInput::make('email')->label('Email')->required()->email(),
                Forms\Components\TextInput::make('description')->label('Description')->required(),
                Forms\Components\Select::make('id_service_sante')
                    ->multiple()
                    ->label('Service de santé')
                    ->options(
                        \App\Models\ServiceSante::all()->pluck('nom', 'id')
                    )->relationship('ServiceSante', 'nom')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
