<?php

########################################################################
# Extension Manager/Repository config file for ext "ad_google_maps_plugin_address".
#
# Auto generated 30-04-2011 17:46
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ad: Google Maps Plugin Address Coordinates Provider',
	'description' => 'Extends the extension ad: Google Maps (ad_google_maps) with a coordinates provider for tt_address.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'extbase,fluid,ad_google_maps',
	'conflicts' => '',
	'priority' => 'bottom',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Arno Dudek',
	'author_email' => 'webmaster@adgrafik.at',
	'author_company' => 'ad:grafik',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-0.0.0',
			'extbase' => '1.3.0-',
			'fluid' => '1.3.0-',
			'ad_google_maps' => '1.2.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:20:{s:9:"ChangeLog";s:4:"c76b";s:16:"ext_autoload.php";s:4:"6982";s:21:"ext_conf_template.txt";s:4:"6c51";s:12:"ext_icon.gif";s:4:"f587";s:14:"ext_tables.php";s:4:"0df6";s:14:"ext_tables.sql";s:4:"7a40";s:32:"Classes/Domain/Model/Address.php";s:4:"949e";s:37:"Classes/Domain/Model/AddressGroup.php";s:4:"f88e";s:30:"Classes/Domain/Model/Layer.php";s:4:"fa19";s:52:"Classes/Domain/Repository/AddressGroupRepository.php";s:4:"61ed";s:47:"Classes/Domain/Repository/AddressRepository.php";s:4:"6e1a";s:45:"Classes/Domain/Repository/LayerRepository.php";s:4:"bd5b";s:55:"Classes/MapBuilder/CoordinatesProvider/AddressGroup.php";s:4:"1d3c";s:52:"Classes/MapBuilder/CoordinatesProvider/Addresses.php";s:4:"e8ea";s:38:"Classes/Service/AddressPostProcess.php";s:4:"e5dd";s:34:"Configuration/TypoScript/setup.txt";s:4:"968d";s:48:"Resources/Private/Language/locallang_extconf.xml";s:4:"94e6";s:44:"Resources/Private/Language/locallang_tca.xml";s:4:"5aca";s:54:"Resources/Private/Language/locallang_tca_csh_layer.xml";s:4:"bf21";s:14:"doc/manual.sxw";s:4:"01ce";}',
	'suggests' => array(
	),
);

?>