<?php
namespace Vokuro\Controllers;

use Vokuro\Models\Source;
use Phalcon\Mvc\Controller,
    Phalcon\Tag;

/**
 * Display the default index page.
 */
class SearchController extends ControllerBase
{
    /**
     * Default action. Set the private (authenticated) layout (layouts/private.volt)
     */
    public function initialize()
    {
        $source = Source::find(array(
                "status = :status:",
                "bind" => array('status' => 1),
            ));

        foreach($source as $sourceSingle) {
            $data[]['val'] = $sourceSingle->getName();
        }

        $this->view->sourceSearch = json_encode($data);
        $this->view->source = $source;

        $form = $this->getDI()->get('Forms\SearchForm'); /* @var \Forms\LoginForm $form */;
        $this->view->form = $form;

        $this->view->setTemplateBefore('private');
    }

    public function indexAction()
    {
        if ($this->request->isPost()) {
            return $this->response->redirect('source/search/' . $this->request->getPost('source'));
        } else {
            echo 'NAUGHTY';
        }
    }
}