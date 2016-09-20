<?php

	include_once 'CSession.class.php';
	
	// first we need to call controller of operation room and from controller, it will call model in order to fetch and set the data. Tehn will pass the COperationRoom object as follows
	
	$objSession = new CSession();
	$objSession->getSessionOverview( $objOperatingRoom );

?>