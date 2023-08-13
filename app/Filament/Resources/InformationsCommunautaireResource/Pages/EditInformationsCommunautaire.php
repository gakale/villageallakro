<?php

namespace App\Filament\Resources\InformationsCommunautaireResource\Pages;

use App\Filament\Resources\InformationsCommunautaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformationsCommunautaire extends EditRecord
{
    protected static string $resource = InformationsCommunautaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
