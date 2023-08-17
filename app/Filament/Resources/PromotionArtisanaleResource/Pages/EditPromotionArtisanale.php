<?php

namespace App\Filament\Resources\PromotionArtisanaleResource\Pages;

use App\Filament\Resources\PromotionArtisanaleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromotionArtisanale extends EditRecord
{
    protected static string $resource = PromotionArtisanaleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
