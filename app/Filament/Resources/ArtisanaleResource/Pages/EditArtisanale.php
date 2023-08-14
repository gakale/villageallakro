<?php

namespace App\Filament\Resources\ArtisanaleResource\Pages;

use App\Filament\Resources\ArtisanaleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtisanale extends EditRecord
{
    protected static string $resource = ArtisanaleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
