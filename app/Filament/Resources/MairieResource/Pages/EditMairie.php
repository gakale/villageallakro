<?php

namespace App\Filament\Resources\MairieResource\Pages;

use App\Filament\Resources\MairieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMairie extends EditRecord
{
    protected static string $resource = MairieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
