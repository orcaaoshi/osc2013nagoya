<?php

class Controller_Api extends Controller_Rest
{
	public function get_population()
	{
		return Model_Population::find('all');
	}
}
