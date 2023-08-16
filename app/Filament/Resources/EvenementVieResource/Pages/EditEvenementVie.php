<?php

namespace App\Filament\Resources\EvenementVieResource\Pages;

use App\Filament\Resources\EvenementVieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEvenementVie extends EditRecord
{
    protected static string $resource = EvenementVieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
