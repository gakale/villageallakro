<?php

namespace App\Filament\Resources\EpidemiesResource\Pages;

use App\Filament\Resources\EpidemiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEpidemies extends EditRecord
{
    protected static string $resource = EpidemiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
