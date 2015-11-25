<?php
/**
 * Created by PhpStorm.
 * User: lahbib
 * Date: 21/11/2015
 * Time: 11:55
 */

namespace App\Controller;

use Core\Controller\Controller;
require_once("Core/Controller/Controller.php");

class AppController extends Controller
{
    protected $template = 'default';
    protected $viewPath ='app/View/';

    public function __construct()
    {
        $this->viewPath = 'app/View/';
    }

}