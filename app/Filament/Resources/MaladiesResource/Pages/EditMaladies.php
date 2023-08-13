<?php

namespace App\Filament\Resources\MaladiesResource\Pages;

use App\Filament\Resources\MaladiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaladies extends EditRecord
{
    protected static string $resource = MaladiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
