<?php
namespace Reader\Controllers;

use Vokuro\Forms\SignUpForm;
use Vokuro\Models\Users;

/**
 * Display the default index page.
 */
class IndexController extends ControllerBase
{
    public function initialize()
    {

    }

    /**
     * Default action. Set the public layout (layouts/public.volt)
     */
    public function indexAction()
    {
        $signUpForm = new SignUpForm();

        if ($this->request->isPost()) {

            if ($signUpForm->isValid($this->request->getPost()) != false) {

                $user = new Users();

                $user->assign(array(
                        'name' => $this->request->getPost('name', 'striptags'),
                        'email' => $this->request->getPost('email'),
                        'password' => $this->security->hash($this->request->getPost('password')),
                        'profilesId' => 2
                    ));

                if ($user->save()) {
                    return $this->dispatcher->forward(array(
                            'controller' => 'index',
                            'action' => 'index'
                        ));
                }

                $this->flash->error($user->getMessages());
            }
        }

        $this->view->signUpForm = $signUpForm;

        $this->view->setVar('logged_in', is_array($this->auth->getIdentity()));
        $this->view->setTemplateBefore('public');
    }
}
