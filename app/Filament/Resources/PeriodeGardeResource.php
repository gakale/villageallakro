<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeriodeGardeResource\Pages;
use App\Filament\Resources\PeriodeGardeResource\RelationManagers;
use App\Models\PeriodeGarde;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeriodeGardeResource extends Resource
{
    protected static ?string $model = PeriodeGarde::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'Gestion de Santé';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('date_debut')->label('Date de début')->required(),
                Forms\Components\DateTimePicker::make('date_fin')->label('Date de fin')->required(),
                Forms\Components\DateTimePicker::make('heure_debut')->label('Heure de début')->required(),
                Forms\Components\DateTimePicker::make('heure_fin')->label('Heure de fin')->required(),
                Forms\Components\Select::make('id_pharmacie')
                    ->multiple()
                    ->label('Pharmacie')
                    ->options(
                        \App\Models\Pharmacie::all()->pluck('nom', 'id')
                    )->relationship('pharmacie', 'nom')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->label('ID'),
                Tables\Columns\TextColumn::make('date_debut')->sortable()->searchable()->label('Date de début'),
                Tables\Columns\TextColumn::make('date_fin')->sortable()->searchable()->label('Date de fin'),
                Tables\Columns\TextColumn::make('heure_debut')->sortable()->searchable()->label('Heure de début'),
                Tables\Columns\TextColumn::make('heure_fin')->sortable()->searchable()->label('Heure de fin'),
                Tables\Columns\TextColumn::make('id_pharmacie')->sortable()->searchable()->label('Pharmacie'),
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
            'index' => Pages\ListPeriodeGardes::route('/'),
            'create' => Pages\CreatePeriodeGarde::route('/create'),
            'edit' => Pages\EditPeriodeGarde::route('/{record}/edit'),
        ];
    }
}
