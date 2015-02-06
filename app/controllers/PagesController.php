<?php

class PagesController extends \BaseController {

	/**
	 * Display the index page of the website
	 *
	 * @return View
	 */
	public function index()
	{
		
		return View::make('pages.index');
	}

}
