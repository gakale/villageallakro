<?php

namespace App\Filament\Resources\PeriodesGardeResource\Pages;

use App\Filament\Resources\PeriodesGardeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeriodesGarde extends EditRecord
{
    protected static string $resource = PeriodesGardeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
