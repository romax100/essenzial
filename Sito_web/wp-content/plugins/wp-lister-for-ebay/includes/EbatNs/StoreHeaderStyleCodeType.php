<?php
/* Generated on 14.02.18 14:28 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreHeaderStyleCodeType extends EbatNs_FacetType
{
	const CodeType_Full = 'Full';
	const CodeType_Minimized = 'Minimized';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreHeaderStyleCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreHeaderStyleCodeType = new StoreHeaderStyleCodeType();
?>