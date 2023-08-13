<?php

namespace App\Filament\Resources\PharmaciesResource\Pages;

use App\Filament\Resources\PharmaciesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPharmacies extends ListRecords
{
    protected static string $resource = PharmaciesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
