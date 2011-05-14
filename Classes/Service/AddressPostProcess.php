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
 * Post process function to clear the coordinates field when useMapDrawerForAddress is FALSE and address changed.
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class tx_AdGoogleMapsPluginAddress_Service_AddressPostProcess {

	/**
	 * Post process function for the address record.
	 * 
	 * @param string $status
	 * @param string $table
	 * @param integer $table
	 * @param array $fieldArray
	 * @param t3lib_TCEmain $reference
	 * @return void
	 */
	public function processDatamap_postProcessFieldArray($status, $table, $uid, &$fieldArray, $reference) {
		if ($table === 'tt_address' && (
				array_key_exists('zip', $fieldArray) || 
				array_key_exists('city', $fieldArray) || 
				array_key_exists('country', $fieldArray) || 
				array_key_exists('address', $fieldArray))
			) {

			$fieldArray['tx_adgooglemapspluginaddress_coordinates'] = '';
		}
	}

}

?>