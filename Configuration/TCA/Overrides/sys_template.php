<?php

defined('TYPO3') or die();

call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'figmaTokenStudio',
            'Configuration/TypoScript',
            'Figma Token Studio - Test Template'
        );
    }
);