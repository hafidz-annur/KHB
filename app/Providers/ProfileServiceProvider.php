<?php

namespace App\Providers;

use App\Models\ProductCategory;
use App\Models\Profile;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider
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
    // Share profile data with all views
    view()->composer('*', function ($view) {
      $profile = Profile::first();
      $category = ProductCategory::orderBy('name', 'asc')->get();
      $view->with('profile', $profile)->with('category', $category);
    });
  }
}
