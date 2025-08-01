<?php

defined('TYPO3') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addRecordType(
    [
        'label' => 'LLL:EXT:frontendtemplate/Resources/Private/Language/locallang_ttc.xlf:service_card',
        'description' => 'LLL:EXT:frontendtemplate/Resources/Private/Language/locallang_ttc.xlf:service_card_description',
        'value' => 'service_card',
        'icon' => 'service-card-icon',
        'group' => 'special',
    ],
    '
    --palette--;;headers,
        bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories',
);
