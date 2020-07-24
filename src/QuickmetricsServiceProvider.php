<?php

namespace Devchris\Quickmetrics;

use Illuminate\Support\ServiceProvider;

class QuickmetricsServiceProvider extends ServiceProvider
{
	public function boot () 
	{
		// publish a config file
		// users can add their own values to
		$this->publishes([
			__DIR__ . '/../config/quickmetrics.php' => config_path('quickmetrics.php')
		]);
	}
	// extend functionality from other classes
	// register service providers
	// create singleton classes
	public function register () 
	{
		$this->app->singleton(Quickmetrics::class, function () {
			return new Quickmetrics();
		});
	}

}