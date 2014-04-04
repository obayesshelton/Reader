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
	Phalcon\Tag;

class IndexController extends BaseController
{
    public function initialize()
    {
        $form = $this->getDI()->get('Forms\SearchForm'); /* @var \Forms\LoginForm $form */;
        $this->view->form = $form;
    }

    public function indexAction()
    {
        $form = $this->getDI()->get('Forms\BetaForm'); /* @var \Forms\LoginForm $form */

        $this->view->pick("index/landing");

        if ($this->request->isPost()) {
            // SHOW A NICE MESSAGE
        }

        $this->view->form = $form;
    }

    public function fourofourAction() {

    }

    /*public function indexAction()
    {
        $source = \Source::find(array(
            "status = :status:",
            "bind" => array('status' => 1),
        ));

        foreach($source as $sourceSingle) {
            $data[]['val'] = $sourceSingle->getName();
        }

        $this->view->sourceSearch = json_encode($data);
        $this->view->source = $source;
    }

    public function sourceAction($sourceName)
    {
        $source = \Source::findFirst(array(
            "name = :name: AND status = :status:",
            "bind" => array(
                'status' => 1,
                'name'   => $sourceName
            ),
        ));

        if($source === false) {
            die('SEND TO 404');
        }

        $article = \Article::find(array(
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

    public function searchAction()
    {
        if ($this->request->isPost()) {
            return $this->response->redirect('source/' . $this->request->getPost('source'));
        } else {
            echo 'NAUGHTY';
        }
    }
}