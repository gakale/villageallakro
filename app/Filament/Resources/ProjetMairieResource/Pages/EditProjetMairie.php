<?php

namespace App\Filament\Resources\ProjetMairieResource\Pages;

use App\Filament\Resources\ProjetMairieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjetMairie extends EditRecord
{
    protected static string $resource = ProjetMairieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
