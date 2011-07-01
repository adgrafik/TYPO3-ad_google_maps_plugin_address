<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Arno Dudek <webmaster@adgrafik.at>
 *  All rights reserved
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

/**
 * Model: Layer.
 * Nearly the same like the Google Maps API
 * @see http://code.google.com/apis/maps/documentation/javascript/reference.html
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 * @api
 */
class Tx_AdGoogleMapsPluginAddress_Domain_Model_Layer extends Tx_AdGoogleMaps_Domain_Model_Layer {

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_AdGoogleMapsPluginAddress_Domain_Model_Address>
	 * @lazy
	 */
	protected $pluginAddressAddresses;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_AdGoogleMapsPluginAddress_Domain_Model_AddressGroup>
	 * @lazy
	 */
	protected $pluginAddressAddressGroups;

	/**
	 * Sets this pluginAddressAddresses
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_AdGoogleMapsPluginAddress_Domain_Model_Address> $pluginAddressAddresses
	 * @return void
	 */
	public function setPluginAddressAddresses(Tx_Extbase_Persistence_ObjectStorage $pluginAddressAddresses) {
		$this->pluginAddressAddresses = $pluginAddressAddresses;
	}

	/**
	 * Returns this pluginAddressAddresses
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_AdGoogleMapsPluginAddress_Domain_Model_Address>
	 */
	public function getPluginAddressAddresses() {
		if ($this->pluginAddressAddresses instanceof Tx_Extbase_Persistence_LazyLoadingProxy) {
			$this->pluginAddressAddresses->_loadRealInstance();
		}
		return $this->pluginAddressAddresses;
	}

	/**
	 * Sets this pluginAddressAddressGroups
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_AdGoogleMapsPluginAddress_Domain_Model_AddressGroup> $pluginAddressAddressGroups
	 * @return void
	 */
	public function setPluginAddressAddressGroups(Tx_Extbase_Persistence_ObjectStorage $pluginAddressAddressGroups) {
		$this->pluginAddressAddressGroups = $pluginAddressAddressGroups;
	}

	/**
	 * Returns this pluginAddressAddressGroups
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_AdGoogleMapsPluginAddress_Domain_Model_AddressGroup>
	 */
	public function getPluginAddressAddressGroups() {
		if ($this->pluginAddressAddressGroups instanceof Tx_Extbase_Persistence_LazyLoadingProxy) {
			$this->pluginAddressAddressGroups->_loadRealInstance();
		}
		return $this->pluginAddressAddressGroups;
	}

}

?>