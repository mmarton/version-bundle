<?php

declare(strict_types=1);

return [
    'name'        => 'Version plugin',
    'description' => 'Provides Api endpoint to get Mautic version number.',
    'version'     => '0.6',
    'author'      => 'Márton Misley',

    'routes' => [
        'api' => [
            'mautic_api_version1' => [
                'path'       => '/version',
                'controller' => 'MauticVersionBundle:Api\VersionApi:getVersion',
            ],
        ],
    ],

    'services' => [
        'integrations' => [
            'mautic.integration.version' => [
                'class' => \MauticPlugin\MauticVersionBundle\Integration\VersionIntegration::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.helper.cache_storage',
                    'doctrine.orm.entity_manager',
                    'session',
                    'request_stack',
                    'router',
                    'translator',
                    'logger',
                    'mautic.helper.encryption',
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.paths',
                    'mautic.core.model.notification',
                    'mautic.lead.model.field',
                    'mautic.plugin.model.integration_entity',
                    'mautic.lead.model.dnc',
                ],
            ],
        ],
    ],
];
