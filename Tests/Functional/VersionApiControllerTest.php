<?php

declare(strict_types=1);

namespace MauticPlugin\MauticVersionBundle\Tests\Functional;

use Mautic\CoreBundle\Test\MauticMysqlTestCase;

class VersionApiControllerTest extends MauticMysqlTestCase
{
    public function testApiResponse(): void
    {
        $this->client->request('GET', '/api/version');
        $clientResponse = $this->client->getResponse();
        $clientResponseContent = $clientResponse->getContent();
        $responseArray = json_decode($clientResponseContent, true, 512, JSON_THROW_ON_ERROR);

        self::assertTrue($clientResponse->isOk(), 'Return code must be 200.');
        self::assertResponseHeaderSame('content-type', 'application/json', 'Response content type must be application/json.');
        self::assertSame(MAUTIC_VERSION, $responseArray['version'], 'Api response must be the actual version.');
    }
}