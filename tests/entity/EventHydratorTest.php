<?php

namespace Audiens\AdForm\Tests\Entity;

/**
 * Class EventHydratorTest
 */
class EventHydratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function hydratorWillReturnEventObject()
    {
        $stdClass = new \stdClass();
        $stdClass->id = 1;
        $stdClass->title = 'test';
        $stdClass->description = 'this is a test';
        $stdClass->status = 0;
        $stdClass->receiverId = '1';
        $stdClass->receiverName = 'Test receiver';
        $stdClass->isNew = true;
        $stdClass->activityId = '1';
        $stdClass->dataProviderIds = ["sample 1", "sample 2"];
        $stdClass->properties = [
            "sample properties" => [
                "hello",
            ],
            "sample two" => [
                "bye",
            ],
        ];
        $stdClass->aliases = ["sample 1", "sample 2"];
        $stdClass->createdAt = '2015-10-10';
        $stdClass->updatedAt = '2015-10-10';

        $event = \Audiens\AdForm\Entity\EventHydrator::fromStdClass($stdClass);

        $this->assertInstanceOf(\Audiens\AdForm\Entity\Event::class, $event);
    }
}
