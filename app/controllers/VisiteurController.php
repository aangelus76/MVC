<?php

class VisiteurController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "hello from Visiteur::index";
	}
	
	public function checkAction()
	{
		echo "hello from Visiteur::check";
	}
}
