<?php

class Controller_Demo extends Controller
{
	public function action_index()
	{
		return Response::forge(View::forge('welcome/index'));
	}

	public function action_greeting()
	{
		$data['greeting'] = 'hello!';
		return Response::forge(View::forge('demo/greeting', $data));
	}

	public function action_population()
	{
		$data['datas'] = Model_Population::find('all');
		return Response::forge(View::forge('demo/population', $data));
	}
}
