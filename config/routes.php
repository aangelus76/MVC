<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
'/' => 'index#index',
	'/test' => 'test#index',
	'/affiche-check' => 'affiche#check',
	'/affiche_news' => 'affiche#news',
	'/affiche' => 'affiche#index',
	'/user' => 'user#index',
	'/visiteur' => 'visiteur#index',
	'/out' => 'out#index'
);
