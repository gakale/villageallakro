<?php

namespace App\Filament\Resources\PeriodeGardeResource\Pages;

use App\Filament\Resources\PeriodeGardeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeriodeGarde extends EditRecord
{
    protected static string $resource = PeriodeGardeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
