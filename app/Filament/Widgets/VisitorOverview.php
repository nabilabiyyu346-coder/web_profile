<?php

namespace App\Filament\Widgets;

use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VisitorOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1; 

    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Visitors', Visitor::count())
                ->description('the total number of all visitors')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),

            Stat::make('Today Visitors', Visitor::where('visited_at', now()->toDateString())->count())
                ->description('Number of visitors today')
                ->descriptionIcon('heroicon-m-user-plus')
                ->color('info'),
        ];
    }
}
