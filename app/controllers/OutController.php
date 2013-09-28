<?php

class OutController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "Arrivée Out::Index";
	}
	
	public function checkAction()
	{
		echo "Arrivée Out::Check";
	}
}
