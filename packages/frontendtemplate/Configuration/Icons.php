<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'service-card-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:frontendtemplate/Resources/Public/Icons/service-card.svg',
    ],
    'project-showcase-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:frontendtemplate/Resources/Public/Icons/project-showcase.svg',
    ],
];
