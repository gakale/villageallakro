<?php

namespace App\Filament\Resources\MetierResource\Pages;

use App\Filament\Resources\MetierResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetier extends EditRecord
{
    protected static string $resource = MetierResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
