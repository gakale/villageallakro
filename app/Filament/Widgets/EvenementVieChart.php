<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;

class EvenementVieChart extends LineChartWidget
{
    protected static ?string $heading = 'Evenement de la vie';

    protected function getData(): array
    {
        return [

            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            'datasets' => [
                [
                    'label' => 'Naissance',
                    'data' => [65, 59, 80, 81, 56, 55],
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgb(75, 192, 192)',
                ],
                [
                    'label' => 'Mariage',
                    'data' => [28, 48, 40, 19, 86, 27],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgb(54, 162, 235)',
                ],
                [
                    'label' => 'Deces',
                    'data' => [18, 48, 77, 9, 100, 27],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgb(255, 99, 132)',

                ],
            ],

        ];
    }
}
