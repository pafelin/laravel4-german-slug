<?php namespace Pafelin\Laravel4GermanSlug\Facades;

use Illuminate\Support\Facades\Facade;

class Slug extends Facade {

	/**
	* Get the registered name of the component.
	*
	* @return string
	*/
	protected static function getFacadeAccessor() { return 'laravel4-german-slug'; }

}
