<?php

namespace App\Filament\Resources\MairiesResource\Pages;

use App\Filament\Resources\MairiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMairies extends EditRecord
{
    protected static string $resource = MairiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
