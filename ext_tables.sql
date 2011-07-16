CREATE TABLE tx_adgooglemaps_domain_model_layer (
	tx_adgooglemapspluginaddress_addresses int(11) unsigned DEFAULT '0' NOT NULL,
	tx_adgooglemapspluginaddress_address_groups int(11) unsigned DEFAULT '0' NOT NULL,
);


#
# Table structure for table 'tx_adgooglemapspluginaddress_layer_ttaddress_mm'
#
CREATE TABLE tx_adgooglemapspluginaddress_layer_ttaddress_mm (
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'tx_adgooglemapspluginaddress_layer_ttaddressgroup_mm'
#
CREATE TABLE tx_adgooglemapspluginaddress_layer_ttaddressgroup_mm (
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'tt_address'
#
CREATE TABLE tt_address (
	tx_adgooglemapspluginaddress_coordinates text,
	tx_adgooglemapspluginaddress_disable_position_fixing tinyint(4) unsigned DEFAULT '0' NOT NULL
);