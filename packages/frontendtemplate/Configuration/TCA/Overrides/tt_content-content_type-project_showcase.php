<?php

defined('TYPO3') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addRecordType(
    [
        'label' => 'LLL:EXT:frontendtemplate/Resources/Private/Language/locallang_ttc.xlf:project_showcase',
        'description' => 'LLL:EXT:frontendtemplate/Resources/Private/Language/locallang_ttc.xlf:project_showcase_description',
        'value' => 'project_showcase',
        'icon' => 'project-showcase-icon',
        'group' => 'special',
    ],
    '
    --palette--;;headers,
        bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:images,
            image,
            --palette--;;mediaAdjustments,
            --palette--;;gallerySettings,
            --palette--;;imagelinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories',
);
