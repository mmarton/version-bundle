<?php

declare(strict_types=1);

namespace MauticPlugin\MauticVersionBundle\Controller\Api;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class VersionApiController extends AbstractFOSRestController
{
    public function getVersionAction(): JsonResponse
    {
        return new JsonResponse(['version' => MAUTIC_VERSION]);
    }
}
