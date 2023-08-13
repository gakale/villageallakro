<?php

namespace App\Filament\Resources\AmenagementsResource\Pages;

use App\Filament\Resources\AmenagementsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmenagements extends EditRecord
{
    protected static string $resource = AmenagementsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
