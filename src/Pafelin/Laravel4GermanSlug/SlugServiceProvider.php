<?php namespace Pafelin\Laravel4GermanSlug;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('pafelin/laravel4-german-slug');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Slug', 'Pafelin\Laravel4GermanSlug\Facades\Slug');
		});

		$this->app['laravel4-german-slug'] = $this->app->share(function($app)
		{
			return new Slug;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}