<?php

namespace Vokuro\Models;

use Phalcon\Mvc\Model;

class Import extends Model
{

    /**
     *
     * @var integer
     */
    protected $id;
     
    /**
     *
     * @var integer
     */
    protected $source_id;
     
    /**
     *
     * @var integer
     */
    protected $last_article_id;
     
    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Method to set the value of field source_id
     *
     * @param integer $source_id
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->source_id = $source_id;
        return $this;
    }

    /**
     * Method to set the value of field last_article_id
     *
     * @param integer $last_article_id
     * @return $this
     */
    public function setLastArticleId($last_article_id)
    {
        $this->last_article_id = $last_article_id;
        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field source_id
     *
     * @return integer
     */
    public function getSourceId()
    {
        return $this->source_id;
    }

    /**
     * Returns the value of field last_article_id
     *
     * @return integer
     */
    public function getLastArticleId()
    {
        return $this->last_article_id;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'source_id' => 'source_id', 
            'last_article_id' => 'last_article_id'
        );
    }

}
