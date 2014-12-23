<?php
namespace Vokuro\Controllers;

/**
 * Display the "About" page.
 */
class FaqController extends ControllerBase
{

    /**
     * Default action. Set the public layout (layouts/public.volt)
     */
    public function indexAction()
    {
        $this->view->setTemplateBefore('public');
    }
}