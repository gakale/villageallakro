<?php

namespace App\Filament\Widgets;

use App\Models\Actualites;
use App\Models\ServiceSante;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Acteur;
use Filament\Widgets\ChartWidget;

class ActeursOverview extends BaseWidget
{
    protected function getCards(): array
    {

        return [
            Card::make('Acteurs', Acteur::count()),
            Card::make('Hommes', Acteur::where('sexe', 'Homme')->count()),
            Card::make('Femmes', Acteur::where('sexe', 'Femme')->count()),
            Card::make('Actualité', Actualites::count()),
        ];
    }

}


