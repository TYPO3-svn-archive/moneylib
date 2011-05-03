<?php

########################################################################
# Extension Manager/Repository config file for ext "moneylib".
#
# Auto generated 03-05-2011 22:34
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Money code library',
	'description' => 'This little code library lets you display monetary values correctly by using data from the static info tables. @see http://forge.typo3.org/projects/show/extension-moneylib',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.3.1',
	'dependencies' => 'static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Robert Lemke, Ingo Schmitt',
	'author_email' => 'robert@typo3.org, is@marketing-factory.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'doNotLoadInFE' => 0,
	'constraints' => array(
		'depends' => array(
			'static_info_tables' => '',
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:3:{s:10:"change.svn";s:4:"4d7b";s:21:"class.tx_moneylib.php";s:4:"3d17";s:12:"ext_icon.gif";s:4:"6f39";}',
	'suggests' => array(
	),
);

?>