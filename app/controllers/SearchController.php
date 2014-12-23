<?php

namespace Reader\Controllers;

use Vokuro\Models\Article;
use Vokuro\Models\Source;
use Phalcon\Mvc\Controller;
use Phalcon\Tag;

class SearchController extends ControllerBase
{
    public function initialize()
    {

    }

    public function indexAction($sourceName)
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
