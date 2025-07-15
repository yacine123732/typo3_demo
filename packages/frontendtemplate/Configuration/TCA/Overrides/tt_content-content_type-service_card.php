<?php

defined('TYPO3') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addRecordType(
    [
        'label' => 'This is a Service Card',
        'description' => 'This is a Service Card',
        'value' => 'service_card',
        'icon' => 'service-card-icon',
        'group' => 'special',
    ],
    '
    --palette--;;headers,
        bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories',
);
