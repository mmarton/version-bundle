<?php

declare(strict_types=1);

namespace MauticPlugin\MauticVersionBundle\Integration;

use Mautic\PluginBundle\Integration\AbstractIntegration;

class VersionIntegration extends AbstractIntegration
{
    const PLUGIN_NAME = 'Version';

    public function getName(): string
    {
        return self::PLUGIN_NAME;
    }

    public function getDisplayName(): string
    {
        return 'Version Api plugin';
    }

    public function getAuthenticationType(): string
    {
        return 'none';
    }
}