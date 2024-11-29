<?php

namespace Acme\CurrentTime;

use Illuminate\Support\ServiceProvider;

class CurrentTimeServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/resources/views', 'current-time');
	}
}
