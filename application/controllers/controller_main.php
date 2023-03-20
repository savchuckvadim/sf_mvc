<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
		
	}

	// protected function view($view, $data = []) {
    //     $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../application/views/templates/');
    //     $twig = new \Twig\Environment($loader);
    //     echo $twig->render($this->view, $data);
    // }
}