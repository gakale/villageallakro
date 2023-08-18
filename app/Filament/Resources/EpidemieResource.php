<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EpidemieResource\Pages;
use App\Filament\Resources\EpidemieResource\RelationManagers;
use App\Models\Epidemie;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EpidemieResource extends Resource
{
    protected static ?string $model = Epidemie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Gestion de Santé';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListEpidemies::route('/'),
            'create' => Pages\CreateEpidemie::route('/create'),
            'edit' => Pages\EditEpidemie::route('/{record}/edit'),
        ];
    }
}
