<?php

class SociauxController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "Arrivée Out::Index";
	}
	
	public function checkAction()
	{
		echo "Arrivée Out::Check";
	}
	
	public function check_listAction()
	{
		echo "Arrivée Out::CheckList";
	}
	public function check_idAction()
	{
		echo "Arrivée Out::CheckId";
		
	}
}
