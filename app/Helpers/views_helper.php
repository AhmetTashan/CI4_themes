<?php
	
if (!function_exists('views')) {
	
	function views(string $page, array $data = [])
	{
		echo view("components/header", $data);
		echo view($page, $data);
		echo view("components/footer", $data);
	}
}
