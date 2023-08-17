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
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
class MetierResource extends Resource
{
    protected static ?string $model = Metier::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('libelle')->label('Nom de libelle')->required(),
                TextInput::make('description')->label('Description')->required(),
                FileUpload::make('image')->label('Image')->required()->image()->directory('images/metiers'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->label('ID'),
                Tables\Columns\TextColumn::make('libelle')->sortable()->searchable()->label('Nom de libelle'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
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
            'index' => Pages\ListMetiers::route('/'),
            'create' => Pages\CreateMetier::route('/create'),
            'edit' => Pages\EditMetier::route('/{record}/edit'),
        ];
    }
}
