<?php

namespace App\Filament\Resources\ServiceSanteResource\Pages;

use App\Filament\Resources\ServiceSanteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceSantes extends ListRecords
{
    protected static string $resource = ServiceSanteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
