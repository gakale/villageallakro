<?php

namespace App\Filament\Resources\ServiceSanteResource\Pages;

use App\Filament\Resources\ServiceSanteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceSante extends EditRecord
{
    protected static string $resource = ServiceSanteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
