<?php
	
if (!function_exists('views')) {
	
	function views(string $page, array $data = [], array $options = [])
	{
		echo view("components/header", $data, $options);
		echo view($page, $data, $options);
		echo view("components/footer", $data, $options);
	}
}
