<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceSanteResource\Pages;
use App\Filament\Resources\ServiceSanteResource\RelationManagers;
use App\Models\ServiceSante;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceSanteResource extends Resource
{
    protected static ?string $model = ServiceSante::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Gestion de Santé';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')->label('Nom du service de santé')->required(),
                Forms\Components\TextInput::make('description')->label('Description')->required(),
                Forms\Components\TextInput::make('cout')
                    ->label('Prix du service')
                    ->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->label('ID'),
                Tables\Columns\TextColumn::make('nom')->sortable()->searchable()->label('Nom du service de santé'),
                Tables\Columns\TextColumn::make('description')->sortable()->searchable()->label('Description'),
                Tables\Columns\TextColumn::make('cout')->sortable()->searchable()->label('Prix du service'),
            ])
            ->filters([

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
            'index' => Pages\ListServiceSantes::route('/'),
            'create' => Pages\CreateServiceSante::route('/create'),
            'edit' => Pages\EditServiceSante::route('/{record}/edit'),
        ];
    }
}
