<?php


$router->get('' , 'PagesController@home');

$router->get('home', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('about/culture', 'PagesController@aboutCulture');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');


// var_dump($router->routes);