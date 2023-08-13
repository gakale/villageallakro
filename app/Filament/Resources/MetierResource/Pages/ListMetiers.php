<?php

namespace App\Filament\Resources\MetierResource\Pages;

use App\Filament\Resources\MetierResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetiers extends ListRecords
{
    protected static string $resource = MetierResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
