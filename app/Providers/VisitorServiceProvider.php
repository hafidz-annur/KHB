<?php

namespace App\Providers;

use App\Models\Profile;
use Carbon\Carbon;
use Coderflex\Laravisit\Models\Visit;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $profile = Profile::first();
        $profile->visit()->withIP();

        view()->composer('*', function ($view) {
            $total = Profile::withTotalVisitCount()->first()->visit_count_total;
            $today = Visit::whereDate('created_at', Carbon::today())->count();
            $month = Visit::whereMonth('created_at', Carbon::now()->month)->count();
            $year = Visit::whereYear('created_at', Carbon::now()->year)->count();
            $view->with('visitor', compact('total', 'today', 'month', 'year'));
        });
    }
}
