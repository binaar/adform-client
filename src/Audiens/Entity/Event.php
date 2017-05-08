<?php

namespace Audiens\AdForm\Entity;

use JsonSerializable;

/**
 * Class Event
 */
class Event implements JsonSerializable
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var array
     */
    protected $dataProviderIds;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var array
     */
    protected $properties;

    /**
     * @var array
     */
    protected $aliases;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var string
     */
    protected $receiverId;

    /**
     * @var string
     */
    protected $receiverName;

    /**
     * @var bool
     */
    protected $isNew;

    /**
     * @var string
     */
    protected $activityId;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var \DateTime
     */
    protected $createdAt;

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
     * @return array
     */
    public function getDataProviderIds()
    {
        return $this->dataProviderIds;
    }

    /**
     * @param array $dataProviderIds
     */
    public function setDataProviderIds($dataProviderIds)
    {
        $this->dataProviderIds = $dataProviderIds;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param array $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * @return array
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param array $aliases
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }

    /**
     * @param string $receiverId
     */
    public function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param string $receiverName
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
    }

    /**
     * @return bool
     */
    public function isIsNew()
    {
        return $this->isNew;
    }

    /**
     * @param bool $isNew
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;
    }

    /**
     * @return mixed
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * @param mixed $activityId
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
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

    function jsonSerialize()
    {
        $json = new \stdClass();

        // might not be set for a new Agency
        if (!is_null($this->id)) {
            $json->id = $this->id;
        }

        $json->description = $this->description;
        $json->title = $this->title;
        $json->status = (bool)$this->status;
        $json->receiverId = $this->receiverId;
        $json->receiverName = $this->receiverName;
        $json->dataProviderIds = $this->dataProviderIds;
        $json->properties = $this->properties;
        $json->aliases = $this->aliases;
        $json->isNew = $this->isNew;
        $json->activityId = $this->activityId;
        $json->createdAt = $this->createdAt;
        $json->updatedAt = $this->updatedAt;

        return $json;
    }


}