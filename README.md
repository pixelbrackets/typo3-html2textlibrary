# Html2Text Library

This TYPO3 CMS extension creates a plain text version of a webpage using the 
[html2text](https://github.com/mtibben/html2text) library.

[![Packagist](https://img.shields.io/packagist/v/webit-de/html2textlibrary.svg)](https://packagist.org/packages/webit-de/html2textlibrary/)
[![TYPO3](https://img.shields.io/badge/TYPO3-extension-orange.svg)](https://extensions.typo3.org/extension/html2textlibrary/)

## Requirements

- PHP
- TYPO3

## Installation

TER Entry http://typo3.org/extensions/repository/view/html2textlibrary/

Packagist Entry https://packagist.org/packages/webit-de/html2textlibrary/

## Source

https://github.com/webit-de/typo3-html2textlibrary/

## Usage

- Include the static [TypoScript »Html2TextLibrary«](./Configuration/TypoScript/)
  in your root template
  - The TypoScript creates a new pagetype which inherits it's settings from
    an existing `page` object, passes all content to script »Html2TextLibrary«
    and returns the plain text
  - Open the target page with parameter `&type=99` to render the new page type

- …or append the script »Html2TextLibrary« as user function at the
  desired point in your TypoScript manually to convert any HTML to plain text

## License

GNU General Public License version 2 or later

The GNU General Public License can be found at http://www.gnu.org/copyleft/gpl.html.

## Author

Dan Untenzu (<untenzu@webit.de> / [@pixelbrackets](https://github.com/pixelbrackets))
for webit! Gesellschaft für neue Medien mbH (http://www.webit.de/)

## Changelog

See [CHANGELOG](./CHANGELOG.md)

## Contribution

> TYPO3 - inspiring people to share!

This TYPO3 extension is Open Source, so please use, patch, extend or fork it.
