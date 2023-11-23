<?php

defined('TYPO3') or die();

call_user_func(static function () {
    $additionalColumns = [
        't3easy_ce_classes' => [
            'label' => 'LLL:EXT:t3easy_ce_classes/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes',
            'exclude' => true,
            'config' => [
                'type' => 'select',
                'renderType' => 'selectCheckBox',
                'appearance' => [
                    'expandAll' => true,
                ],
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $additionalColumns
    );

    $GLOBALS['TCA']['tt_content']['palettes']['t3easy_ce_classes_appearance'] = [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
        'showitem' => '
            layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
            t3easy_ce_classes;LLL:EXT:t3easy_ce_classes/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes
        ',
    ];
});
