<?php

namespace App\Filament\Resources\InformationCommunautaireResource\Pages;

use App\Filament\Resources\InformationCommunautaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformationCommunautaire extends EditRecord
{
    protected static string $resource = InformationCommunautaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
