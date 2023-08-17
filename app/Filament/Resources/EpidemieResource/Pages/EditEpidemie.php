<?php

namespace App\Filament\Resources\EpidemieResource\Pages;

use App\Filament\Resources\EpidemieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEpidemie extends EditRecord
{
    protected static string $resource = EpidemieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
