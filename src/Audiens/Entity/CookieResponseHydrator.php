<?php

namespace Audiens\AdForm\Entity;


/**
 * Class CookieResponseHydrator
 */
class CookieResponseHydrator extends CookieResponse
{
    /**
     * Hydrate a CookieResponse from a stdClass, intended to be used for
     * instancing a CookieResponse from json_decode()
     *
     * @param \stdClass $stdClass
     *
     * @return CookieResponse
     */
    public static function fromStdClass(\stdClass $stdClass)
    {
        $cookieResponse = new CookieResponse();

        $cookieResponse->id = $stdClass->id;
        $cookieResponse->status = $stdClass->status;
        $cookieResponse->updatedAt = new \DateTime($stdClass->updatedAt);
        $cookieResponse->createdAt = new \DateTime($stdClass->createdAt);

        $events = $stdClass->events;

        $eventCollected = [];

        if (!empty($events) && is_array($events) && count($events) > 0) {
            foreach ($events as $event) {
                $eventCollected[] = EventHydrator::fromStdClass($event);
            }
        }

        $cookieResponse->setEvents($eventCollected);

        return $cookieResponse;
    }

}