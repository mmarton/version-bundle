<?php

declare(strict_types=1);

namespace MauticPlugin\MauticVersionBundle\Tests;

use Mautic\CoreBundle\Test\MauticMysqlTestCase;

class VersionApiControllerTest extends MauticMysqlTestCase
{
    public function testApiResponse(): void
    {
        $this->client->request('GET', '/api/version');
        $clientResponse = $this->client->getResponse();
        $clientResponseContent = $clientResponse->getContent();

        self::assertTrue($clientResponse->isOk(), 'Return code must be 200.');
        self::assertResponseHeaderSame('content-type', 'application/json', 'Response content type must be application/json.');
        self::assertSame(MAUTIC_VERSION, $clientResponseContent, 'Api response must be the actual version.');
    }
}