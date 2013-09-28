<?php

class AfficheController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = " hello from Affiche::index";
	}
	
	public function checkAction()
	{
		$this->view->message = " hello from Affiche::Check";
	}
	
	public function newsAction()
	{
		$this->view->message = " hello from Affiche::News";
	}
}
