<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'HTML to TXT Library',
    'description' => 'Creates a plain text version of a webpage using the html2text library',
    'category' => 'misc',
    'author' => 'Dan Untenzu',
    'author_email' => 'untenzu@webit.de',
    'author_company' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.7.99',
        ),
        'conflicts' => array(),
        'suggests' => array()
    )
);
