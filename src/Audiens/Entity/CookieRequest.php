<?php

namespace Audiens\AdForm\Entity;


/**
 * Class CookieRequest
 */
class CookieRequest
{
    /**
     * @var array
     */
    protected $dataProviderIds;

    /**
     * @var array
     */
    protected $segmentIds;

    /**
     * @var int
     */
    protected $segmentSource;

    /**
     * @var array
     */
    protected $fields;

    /**
     * @var bool
     */
    protected $ignoreDeletedSegments;

    /**
     * @var bool
     */
    protected $singleFile;

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
     * @return array
     */
    public function getSegmentIds()
    {
        return $this->segmentIds;
    }

    /**
     * @param array $segmentIds
     */
    public function setSegmentIds($segmentIds)
    {
        $this->segmentIds = $segmentIds;
    }

    /**
     * @return int
     */
    public function getSegmentSource()
    {
        return $this->segmentSource;
    }

    /**
     * @param int $segmentSource
     */
    public function setSegmentSource($segmentSource)
    {
        $this->segmentSource = $segmentSource;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return bool
     */
    public function isIgnoreDeletedSegments()
    {
        return $this->ignoreDeletedSegments;
    }

    /**
     * @param bool $ignoreDeletedSegments
     */
    public function setIgnoreDeletedSegments($ignoreDeletedSegments)
    {
        $this->ignoreDeletedSegments = $ignoreDeletedSegments;
    }

    /**
     * @return mixed
     */
    public function getSingleFile()
    {
        return $this->singleFile;
    }

    /**
     * @param mixed $singleFile
     */
    public function setSingleFile($singleFile)
    {
        $this->singleFile = $singleFile;
    }
}