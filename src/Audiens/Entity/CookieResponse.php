<?php

namespace Audiens\AdForm\Entity;

use JsonSerializable;

/**
 * Class CookieResponse
 */
class CookieResponse implements JsonSerializable
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var integer
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var Event[]
     */
    protected $events;


    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @inheritdoc
     */
    function jsonSerialize()
    {
        $json = new \stdClass();

        // might not be set for a new Agency
        if (!is_null($this->id)) {
            $json->id = $this->id;
        }

        $json->status = $this->status;
        $json->events = $this->events;

        $json->createdAt = $this->createdAt;
        $json->updatedAt = $this->updatedAt;

        return $json;
    }


}