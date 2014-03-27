<?php

/**
 * ComplySec Short Description
 *
 * ComplySec Long description
 *
 * PHP version 5.5
 * PHALCON version 1.2.1
 *
 * @category Controllers
 * @package ComplySec
 * @subpackage Application
 * @author Oliver Bayes-Shelton <oliver.bayes-shelton@randomstorm.com>
 *
 * @copyright 2013 RandomStorm Limited <www.randomstorm.com>
 * @license None
 *
 * @version 1.0
 * @link http://docs.complysec.net
 */

use Phalcon\Mvc\Controller,
    Phalcon\Tag,
    Forms\Login;

abstract class BaseController extends Controller {

    public function initialize()
    {
        $this->view->setVar("name",  "");
        //Check if the variable is defined
        if ($this->session->has("auth")) {
            //Retrieve its value
            $this->view->setVar("name",  $this->session->get("auth")['name']);
        }

        $bc = new \Services\Crumbs($this->getDI()); /* @var \Services\Users $usersService */
        $bc->setPointer('&raquo;');
        $this->view->setVar('crumbs', $bc->crumbs());

        $this->view->setTemplateAfter('layout');

        $this->view->setVar('previous', $this->session->get("nav")['previous']);

        $this->session->set('nav', array(
        'previous' => $_SERVER['REQUEST_URI'],
        ));
    }
}