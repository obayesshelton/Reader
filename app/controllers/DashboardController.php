<?php

namespace Reader\Controllers;

class DashboardController extends ControllerBase
{
    public function initialize()
    {

    }

    public function indexAction()
    {
        $this->view->setTemplateBefore('public');
    }
}
