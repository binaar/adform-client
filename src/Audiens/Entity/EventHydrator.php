<?php

namespace Audiens\AdForm\Entity;


/**
 * Class EventHydrator
 */
class EventHydrator extends Event
{
    /**
     * Hydrate an event from a stdClass, intended to be used for
     * instancing a event from json_decode()
     *
     * @param \stdClass $stdClass
     *
     * @return Event
     */
    public static function fromStdClass(\stdClass $stdClass)
    {
        $event = new Event();

        $event->id = $stdClass->id;
        $event->title = $stdClass->title;
        $event->description = $stdClass->description;
        $event->status = $stdClass->status;
        $event->receiverId = $stdClass->receiverId;
        $event->receiverName = $stdClass->receiverName;
        $event->isNew = (bool)$stdClass->isNew;
        $event->activityId = $stdClass->activityId;
        $event->updatedAt = new \DateTime($stdClass->updatedAt);
        $event->createdAt = new \DateTime($stdClass->createdAt);

        $event->dataProviderIds = $stdClass->dataProviderIds;
        $event->properties = $stdClass->properties;
        $event->aliases = $stdClass->aliases;


        return $event;
    }

}