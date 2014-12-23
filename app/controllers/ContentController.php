<?php

namespace Reader\Controllers;

class ContentController extends ControllerBase
{
    public function initialize()
    {

    }

    public function aboutAction()
    {
        $this->view->setTemplateBefore('public');
    }

    public function termsAction()
    {
        $this->view->setTemplateBefore('public');
    }

    public function faqAction()
    {
        $this->view->setTemplateBefore('public');
    }

    public function advertiseAction()
    {
        $this->view->setTemplateBefore('public');
    }
}
