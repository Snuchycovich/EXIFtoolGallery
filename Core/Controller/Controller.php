<?php
/**
 * Created by PhpStorm.
 * User: lahbib
 * Date: 21/11/2015
 * Time: 11:48
 */

namespace Core\Controller;


class Controller
{
    protected $viewPath;
    //protected $template;

    public function render($view, $variables=[]){
        ob_start();
        extract($variables);
        require_once($this->viewPath . str_replace('.', '/', $view) . '.php');
        $html = ob_get_contents();
        ob_end_clean();
        return $html;

    }

    protected function forbidden(){
        header('HTTP/1.0 404 Forbidden');
        die('Acces interdit');
    }

    protected function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
}