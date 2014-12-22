<?php
namespace Vokuro\Controllers;

use Vokuro\Models\Source;
use Vokuro\Forms\SignUpForm;

/**
 * Display the default index page.
 */
class IndexController extends ControllerBase
{
    public function initialize()
    {
        $form = $this->getDI()->get('Forms\SearchForm'); /* @var \Forms\LoginForm $form */;
        $this->view->form = $form;
    }

    /**
     * Default action. Set the public layout (layouts/public.volt)
     */
    public function indexAction()
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

        $signUpform = new SignUpForm();
        $this->view->signUpform = $signUpform;

        $this->view->setVar('logged_in', is_array($this->auth->getIdentity()));
        $this->view->setTemplateBefore('public');
    }
}
