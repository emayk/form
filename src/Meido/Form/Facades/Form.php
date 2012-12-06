<?php namespace Meido\Form\Facades;

use Illuminate\Support\Facades\Facade;

class Form extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'form'; }

}