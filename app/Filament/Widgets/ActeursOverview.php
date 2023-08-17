<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

use App\Models\Acteur;

class ActeursOverview extends BaseWidget
{

    protected function getCards(): array
    {
        return [
            Card::make('Acteurs', Acteur::count()),
            Card::make('Hommes', Acteur::where('sexe', 'Homme')->count()),
            Card::make('Femmes', Acteur::where('sexe', 'Femme')->count()),
            Card::make('Enfants', Acteur::where('sexe', 'Enfant')->count())->color('success'),


        ];


    }

}
