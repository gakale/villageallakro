<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CentresInteretResource\Pages;
use App\Filament\Resources\CentresInteretResource\RelationManagers;
use App\Models\CentresInteret;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CentresInteretResource extends Resource
{
    protected static ?string $model = CentresInteret::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
            'index' => Pages\ListCentresInterets::route('/'),
            'create' => Pages\CreateCentresInteret::route('/create'),
            'edit' => Pages\EditCentresInteret::route('/{record}/edit'),
        ];
    }    
}
