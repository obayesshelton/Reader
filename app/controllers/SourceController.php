<?php
namespace Vokuro\Controllers;

use Vokuro\Models\Article;
use Vokuro\Models\Source;
use Phalcon\Mvc\Controller,
    Phalcon\Tag;

/**
 * Display the default index page.
 */
class SourceController extends ControllerBase
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

    public function searchAction($sourceName)
    {
        $source = Source::findFirst(array(
            "name = :name: AND status = :status:",
            "bind" => array(
                'status' => 1,
                'name'   => $sourceName
            ),
        ));

        if($source === false) {
            die('SEND TO 404');
        }

        $article = Article::find(array(
            "source_id = :source_id: AND status = :status:",
            "bind" => array(
                'status' => 1,
                'source_id' => $source->getId()
            ),
        ));

        foreach($source as $sourceSingle) {
            $data[]['val'] = $sourceSingle->getName();
        }

        $this->view->sourceSearch = json_encode($data);
        $this->view->source = $source;
        $this->view->article = $article;
    }
}
