<?php

namespace Vokuro\Models;

use Phalcon\Mvc\Model;

class Source extends Model
{

    /**
     *
     * @var integer
     */
    protected $id;
     
    /**
     *
     * @var string
     */
    protected $name;
     
    /**
     *
     * @var string
     */
    protected $feed_url;
     
    /**
     *
     * @var string
     */
    protected $logo_url;
     
    /**
     *
     * @var string
     */
    protected $description;
     
    /**
     *
     * @var integer
     */
    protected $status;
     
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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Method to set the value of field feed_url
     *
     * @param string $feed_url
     * @return $this
     */
    public function setFeedUrl($feed_url)
    {
        $this->feed_url = $feed_url;
        return $this;
    }

    /**
     * Method to set the value of field logo_url
     *
     * @param string $logo_url
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        $this->logo_url = $logo_url;
        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field feed_url
     *
     * @return string
     */
    public function getFeedUrl()
    {
        return $this->feed_url;
    }

    /**
     * Returns the value of field logo_url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'feed_url' => 'feed_url', 
            'logo_url' => 'logo_url', 
            'description' => 'description', 
            'status' => 'status'
        );
    }

}
