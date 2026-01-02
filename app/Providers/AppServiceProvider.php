<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\News;
use App\Models\Announcement;
use App\Observers\AnnouncementObserver;
use App\Observers\NewsObserver;

class AppServiceProvider extends ServiceProvider
{
	/**
	* Register any application services.
	*/
	public function register(): void
	{
		//
	}

	public function boot(): void
	{
		News::observe(NewsObserver::class);
		Announcement::observe(AnnouncementObserver::class);
	}
}
