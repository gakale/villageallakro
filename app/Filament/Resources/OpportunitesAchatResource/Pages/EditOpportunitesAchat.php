<?php

namespace App\Filament\Resources\OpportunitesAchatResource\Pages;

use App\Filament\Resources\OpportunitesAchatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpportunitesAchat extends EditRecord
{
    protected static string $resource = OpportunitesAchatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
