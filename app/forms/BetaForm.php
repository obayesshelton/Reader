<?php

namespace Forms;


use Phalcon\Forms\Form,
    Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\Submit,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email;

class BetaForm extends BaseForm
{
    public function initialize()
    {
        //Email
        $email = new Text('email', array(
            'placeholder'  => 'john.smith@example.com',
            'name'         => 'email',
            'autocomplete' => 'off',
            'onfocus'      => "this.placeholder=''"
        ));

        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'The e-mail is required'
            )),
            new Email(array(
                'message' => 'The e-mail is invalid'
            ))
        ));

        $email->setLabel('Email');

        $this->add($email);

        $this->add(parent::csrf());

        $this->add(new Submit('add'));
    }
}