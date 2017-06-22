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

class Html2TextLibrary extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin {
	var $prefixId = 'Html2TextLibrary'; // Same as class name
	var $scriptRelPath = 'Classes/Utility/Html2TextLibrary.php'; // Path to this script relative to the extension dir.
	var $extKey = 'html2textlibrary'; // The extension key.
	var $pi_checkCHash = TRUE;

	function convert($content, $conf) {
		// Instantiate a new instance of the class. Passing the string
		// variable automatically loads the HTML for you.
		$htmlToText = new Html2Text\Html2Text($content);

		// The HTML is likely full of relative links, so let's specify
		// an absolute source.
		$htmlToText->set_base_url($GLOBALS['TSFE']->absRefPrefix);

		// Simply call the get_text() method for the class to convert
		// the HTML to the plain text. Store it into the variable.
		$text = $htmlToText->get_text();

		return ($text);
	}
}

?>