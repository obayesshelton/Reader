<?php

namespace Forms;


use Phalcon\Forms\Form,
    Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\Submit,
    Phalcon\Validation\Validator\PresenceOf;

class SearchForm extends BaseForm
{
    public function initialize()
    {
        //source
        $source = new Text('source', array(
            'placeholder'  => 'source',
            'name'         => 'source',
            'autocomplete' => 'off',
            'onfocus'      => "this.placeholder=''"
        ));

        $source->addValidators(array(
            new PresenceOf(array(
                'message' => 'The e-mail is required'
            ))
        ));

        $this->add($source);

        $this->add(parent::csrf());

        $this->add(new Submit('search'));
    }
}