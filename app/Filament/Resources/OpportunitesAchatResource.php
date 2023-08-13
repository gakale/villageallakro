<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OpportunitesAchatResource\Pages;
use App\Filament\Resources\OpportunitesAchatResource\RelationManagers;
use App\Models\OpportunitesAchat;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OpportunitesAchatResource extends Resource
{
    protected static ?string $model = OpportunitesAchat::class;

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
            'index' => Pages\ListOpportunitesAchats::route('/'),
            'create' => Pages\CreateOpportunitesAchat::route('/create'),
            'edit' => Pages\EditOpportunitesAchat::route('/{record}/edit'),
        ];
    }    
}
