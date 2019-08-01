<?php

/***************************************************************
*  Copyright notice
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class Html2TextLibrary extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin
{
    public $prefixId = 'Html2TextLibrary'; // Same as class name
    public $scriptRelPath = 'Classes/Utility/Html2TextLibrary.php'; // Path to this script relative to the extension dir.
    public $extKey = 'html2textlibrary'; // The extension key.
    public $pi_checkCHash = true;

    public function convert($content, $conf)
    {
        $htmlToText = new \Html2Text\Html2Text($content);

        // Use absolute links
        $htmlToText->setBaseUrl($GLOBALS['TSFE']->absRefPrefix);

        return $htmlToText->getText();
    }
}
