<?php

namespace App\Filament\Resources\ProjetsMairieResource\Pages;

use App\Filament\Resources\ProjetsMairieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjetsMairie extends EditRecord
{
    protected static string $resource = ProjetsMairieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
