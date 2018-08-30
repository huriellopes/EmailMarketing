<?php

namespace App;

use Base\Init\RouteDefault;

class Route extends RouteDefault
{
    // Função responsavel pelas rotas
    protected function initRoutes()
    {
        $route['home'] = array(
            'route'         =>  '/',
            'controller'    =>  'EmailController',
            'action'        =>  'index'
        );

        $route['cadastro'] = array(
            'route'         =>  '/cadastro',
            'controller'    =>  'EmailController',
            'action'        =>  'cadEmail'
        );

        $route['salva'] = array(
            'route'         =>  '/salva',
            'controller'    =>  'EmailController',
            'action'        =>  'salva'
        );

        $route['lista'] = array(
            'route'         =>  '/lista',
            'controller'    =>  'EmailController',
            'action'        =>  'lista'
        );

        $route['campanha'] = array(
            'route'         =>  '/campanha',
            'controller'    =>  'EmailController',
            'action'        =>  'campanha'
        );

        $route['envia'] = array(
            'route'         =>  '/envia',
            'controller'    =>  'EmailController',
            'action'        =>  'enviaEmail'
        );

        $route['relatorio'] = array(
            'route'         =>  '/relatorio',
            'controller'    =>  'EmailController',
            'action'        =>  'relatorio'
        );
        
        $route['gera'] = array(
            'route'         =>  '/gera',
            'controller'    =>  'EmailController',
            'action'        =>  'gera'
        );

        $this->setRoutes($route);
    }
}
