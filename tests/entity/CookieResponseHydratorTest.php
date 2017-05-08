<?php

namespace Audiens\AdForm\Tests\Entity;

/**
 * Class CookieResponseHydratorTest
 */
class CookieResponseHydratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function hydratorWillReturnCookieResponseObject()
    {
        $eventExampleOne = new \stdClass();
        $eventExampleOne->id = 1;
        $eventExampleOne->title = 'test';
        $eventExampleOne->description = 'this is a test';
        $eventExampleOne->status = 0;
        $eventExampleOne->receiverId = '1';
        $eventExampleOne->receiverName = 'Test receiver';
        $eventExampleOne->isNew = true;
        $eventExampleOne->activityId = '1';
        $eventExampleOne->dataProviderIds = ["sample 1", "sample 2"];
        $eventExampleOne->properties = [
            "sample properties" => [
                "hello",
            ],
            "sample two" => [
                "bye",
            ],
        ];
        $eventExampleOne->aliases = ["sample 1", "sample 2"];
        $eventExampleOne->createdAt = '2015-10-10';
        $eventExampleOne->updatedAt = '2015-10-10';

        $eventExampleTwo = new \stdClass();
        $eventExampleTwo->id = 1;
        $eventExampleTwo->title = 'test2';
        $eventExampleTwo->description = 'this is the second test';
        $eventExampleTwo->status = 0;
        $eventExampleTwo->receiverId = '1';
        $eventExampleTwo->receiverName = 'Test receiver';
        $eventExampleTwo->isNew = true;
        $eventExampleTwo->activityId = '1';
        $eventExampleTwo->dataProviderIds = ["sample 1", "sample 2"];
        $eventExampleTwo->properties = [
            "sample properties" => [
                "hello",
            ],
            "sample two" => [
                "bye",
            ],
        ];
        $eventExampleTwo->aliases = ["sample 1", "sample 2"];
        $eventExampleTwo->createdAt = '2015-10-10';
        $eventExampleTwo->updatedAt = '2015-10-10';

        $stdClass = new \stdClass();
        $stdClass->id = '10';
        $stdClass->status = 1;
        $stdClass->events = [$eventExampleOne, $eventExampleTwo];

        $stdClass->createdAt = '2015-10-10';
        $stdClass->updatedAt = '2015-10-10';

        $cookieResponse = \Audiens\AdForm\Entity\CookieResponseHydrator::fromStdClass($stdClass);

        $this->assertInstanceOf(\Audiens\AdForm\Entity\CookieResponse::class, $cookieResponse);
    }
}
