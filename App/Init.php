<?php

namespace App;

use UNIS\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function initRoutes()
	{
	    $taskRoutes['home'] = [
	       'route' => '/',
	       'controller' => 'index',
	       'action' => 'index'
	    ];

	    $taskRoutes['add'] = [
	       'route' => '/usuario/add',
	       'controller' => 'usuario',
	       'action' => 'adicionar'
	    ];

	    $taskRoutes['delete'] = [
	       'route' => '/delete',
	       'controller' => 'tasks',
	       'action' => 'deletar'
	    ];

	    $this->setRoutes($taskRoutes);
	}
}