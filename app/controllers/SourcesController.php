<?php

namespace Reader\Controllers;

class SourcesController extends ControllerBase
{
    public function initialize()
    {

    }

    public function indexAction()
    {
        $this->view->setTemplateBefore('public');
    }
}
