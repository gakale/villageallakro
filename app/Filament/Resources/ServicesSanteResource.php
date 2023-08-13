<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesSanteResource\Pages;
use App\Filament\Resources\ServicesSanteResource\RelationManagers;
use App\Models\ServicesSante;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesSanteResource extends Resource
{
    protected static ?string $model = ServicesSante::class;

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
            'index' => Pages\ListServicesSantes::route('/'),
            'create' => Pages\CreateServicesSante::route('/create'),
            'edit' => Pages\EditServicesSante::route('/{record}/edit'),
        ];
    }    
}
