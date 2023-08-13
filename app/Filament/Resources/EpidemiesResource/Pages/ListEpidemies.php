<?php

namespace App\Filament\Resources\EpidemiesResource\Pages;

use App\Filament\Resources\EpidemiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEpidemies extends ListRecords
{
    protected static string $resource = EpidemiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
