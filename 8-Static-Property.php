<?php

	class Test
	{
		static string $static_property = 'I\'m static';

		function get_sp(): string
		{
			return self::$static_property;
		}
	}

	$temp = new Test();

	echo 'Test A: '.Test::$static_property.'<br>';
	echo 'Test B: '.$temp->get_sp().'<br>';
	//	echo 'Test C: ' . $temp->static_property . '<br>';