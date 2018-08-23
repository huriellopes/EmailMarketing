<?php

namespace App;

use Base\Init\RouteDefault;

class Route extends RouteDefault
{
    // Função responsavel pelas rotas
    protected function initRoutes()
    {
        $route['home'] = array(
            'route'         => '/',
            'controller'    => 'EmailController',
            'action'        => 'index'
        );

        $route['cadastro'] = array(
            'route'         => '/cadastro',
            'controller'    => 'EmailController',
            'action'        => 'cadEmail'
        );

        $route['salva'] = array(
            'route'         => '/salva',
            'controller'    => 'EmailController',
            'action'        => 'salva'
        );
        $this->setRoutes($route);
    }
}
