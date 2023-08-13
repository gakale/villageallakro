<?php

namespace App\Filament\Resources\OffresEmploiResource\Pages;

use App\Filament\Resources\OffresEmploiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffresEmploi extends EditRecord
{
    protected static string $resource = OffresEmploiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
