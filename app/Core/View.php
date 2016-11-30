<?php

namespace App\Core;

class View
{
	function render($content_view, $template_view, $data = null)
	{
		include __DIR__ . '/../Views/'.$template_view;
	}
}
