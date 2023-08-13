<?php

namespace App\Filament\Resources\PromotionsArtisanaleResource\Pages;

use App\Filament\Resources\PromotionsArtisanaleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromotionsArtisanale extends EditRecord
{
    protected static string $resource = PromotionsArtisanaleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
