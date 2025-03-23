<?php
namespace LeonhardBolschakow\figmaTokenStudio\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ConvertJsonToCssViewHelper extends AbstractViewHelper {

    protected $escapeOutput = false;

    public function initializeArguments(): void
    {
        $this->registerArgument(
            'json',
            'string',
            'json file',
            false,
        );
    }


    public function render(): string
    {
        $json = $this->arguments['json'];

        return 'Hallo Welt!';
    }
}