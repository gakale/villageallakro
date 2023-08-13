<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetierResource\Pages;
use App\Filament\Resources\MetierResource\RelationManagers;
use App\Models\Metier;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetierResource extends Resource
{
    protected static ?string $model = Metier::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('libelle')->label('Libellé')->required(),
                Forms\Components\TextInput::make('description')->label('Description')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('libelle')->sortable()->searchable()->label('Libellé'),
                Tables\Columns\TextColumn::make('description')->label('Description'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListMetiers::route('/'),
            'create' => Pages\CreateMetier::route('/create'),
            'edit' => Pages\EditMetier::route('/{record}/edit'),
        ];
    }
}
