<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$extensionConfiguration = Tx_AdGoogleMaps_Utility_BackEnd::getExtensionConfiguration('ad_google_maps_plugin_address');
// l10n_mode for property fields.
$excludeProperties = Tx_AdGoogleMaps_Utility_BackEnd::getExtensionConfigurationValue('excludeProperties');

// TCA configuration for tx_adgooglemaps_domain_model_layer
t3lib_div::loadTCA('tx_adgooglemaps_domain_model_layer');

$tempColumns = array(
	'tx_adgooglemapspluginaddress_addresses' => array(
		'label' => 'LLL:EXT:ad_google_maps_plugin_address/Resources/Private/Language/locallang_tca.xml:tx_adgooglemaps_domain_model_layer.addresses',
		'exclude' => true,
		'l10n_mode' => $excludeProperties,
		'displayCond' => 'FIELD:coordinates_provider:=:Tx_AdGoogleMapsPluginAddress_PluginAdapter_CoordinatesProvider_Addresses',
		'config' => array(
			'type' => 'select',
			'size' => '5',
			'autoSizeMax' => 15,
			'minitems' => 0,
			'maxitems' => 99,
			'foreign_table' => 'tt_address',
			'MM' => 'tx_adgooglemapspluginaddress_layer_ttaddress_mm',
		),
	),
	'tx_adgooglemapspluginaddress_address_groups' => array(
		'label' => 'LLL:EXT:ad_google_maps_plugin_address/Resources/Private/Language/locallang_tca.xml:tx_adgooglemaps_domain_model_layer.addressGroups',
		'exclude' => true,
		'l10n_mode' => $excludeProperties,
		'displayCond' => 'FIELD:coordinates_provider:=:Tx_AdGoogleMapsPluginAddress_PluginAdapter_CoordinatesProvider_AddressGroup',
		'config' => array(
			'type' => 'select',
			'size' => '5',
			'autoSizeMax' => 15,
			'minitems' => 0,
			'maxitems' => 99,
			'foreign_table' => 'tt_address_group',
			'MM' => 'tx_adgooglemapspluginaddress_layer_ttaddressgroup_mm',
		),
	),
);

t3lib_extMgm::addTCAcolumns('tx_adgooglemaps_domain_model_layer', $tempColumns, 1);
t3lib_extMgm::addLLrefForTCAdescr('tx_adgooglemaps_domain_model_layer', 'EXT:ad_google_maps_plugin_address/Resources/Private/Language/locallang_tca_csh_layer.xml');
// Add layer type icon.
$TCA['tx_adgooglemaps_domain_model_layer']['columns']['coordinates_provider']['config']['items'][] = array('LLL:EXT:ad_google_maps_plugin_address/Resources/Private/Language/locallang_tca.xml:tx_adgooglemaps_domain_model_layer.coordinatesProvider.addresses', 'Tx_AdGoogleMapsPluginAddress_PluginAdapter_CoordinatesProvider_Addresses');
$TCA['tx_adgooglemaps_domain_model_layer']['columns']['coordinates_provider']['config']['items'][] = array('LLL:EXT:ad_google_maps_plugin_address/Resources/Private/Language/locallang_tca.xml:tx_adgooglemaps_domain_model_layer.coordinatesProvider.addressGroups', 'Tx_AdGoogleMapsPluginAddress_PluginAdapter_CoordinatesProvider_AddressGroup');
t3lib_extMgm::addToAllTCAtypes(
	'tx_adgooglemaps_domain_model_layer',
	'tx_adgooglemapspluginaddress_addresses, tx_adgooglemapspluginaddress_address_groups',
	$extensionConfiguration['addToLayerType'],
	'after:coordinates'
);

// Add static TypoScript
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'ad: Google Maps Plugin tt_address Coordinates Provider');

// Add tt_address support.
if (t3lib_extMgm::isLoaded('tt_address') === TRUE) {
	if ((boolean) $extensionConfiguration['useMapDrawerForAddress'] === TRUE) {
		$tempColumns = array(
			'tx_adgooglemapspluginaddress_coordinates' => array(
				'exclude' => true,
				'label'   => 'LLL:EXT:ad_google_maps/Resources/Private/Language/MapDrawer/locallang.xml:tx_adgooglemaps_mapdrawer.coordinates',
				'config'  => array(
					'type' => 'user',
					'size' => 20,
					'eval' => 'required,nospace,trim',
					'userFunc' => 'EXT:ad_google_maps/Classes/MapDrawer/MapDrawerApi.php:tx_AdGoogleMaps_MapDrawer_MapDrawerApi->tx_draw',
				),
			),
		);

		t3lib_div::loadTCA('tt_address');
		t3lib_extMgm::addTCAcolumns('tt_address', $tempColumns, 1);
		t3lib_extMgm::addLLrefForTCAdescr('tt_address', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_tca_csh_layer.xml');
		t3lib_extMgm::addToAllTCAtypes('tt_address', '--div--;LLL:EXT:ad_google_maps/Resources/Private/Language/MapDrawer/locallang.xml:tx_adgooglemaps_mapdrawer.sheetMapDrawer, tx_adgooglemapspluginaddress_coordinates;;;;1-1-1');
		$GLOBALS['TCA']['tt_address']['ctrl']['dividers2tabs'] = 2;
	}

	// Set post process function for tt_address on change.
	$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['processDatamap_postProcessFieldArray'] = 'EXT:ad_google_maps_plugin_address/Classes/Service/AddressPostProcess.php:tx_AdGoogleMapsPluginAddress_Service_AddressPostProcess';
}

?>