<?php

namespace App\Filament\Resources\UsersResource\Widgets;

use App\Models\Exercise;
use App\Models\Support;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Users", User::all()->count()),
            Stat::make("Exercises", Exercise::all()->count()),
            Stat::make("Resources", Support::all()->count()),
        ];
    }
}
