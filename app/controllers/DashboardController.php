<?php
namespace Vokuro\Controllers;

use Vokuro\Models\Source;
use Phalcon\Tag;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Vokuro\Forms\ProfilesForm;
use Vokuro\Models\Profiles;

/**
 * Vokuro\Controllers\ProfilesController
 * CRUD to manage profiles
 */
class DashboardController extends ControllerBase
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

    /**
     * Default action, shows the search form
     */
    public function indexAction()
    {

    }
}
