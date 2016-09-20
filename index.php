<?php

	include_once 'CAppointmentController.class.php';
	include_once 'COperatingRoomController.class.php';
	include_once 'CPatientModelController.class.php';
	include_once 'CSessionController.class.php';
	include_once 'CSessionExecutorController.class.php';
	include_once 'CStaffController.class.php';
	include_once 'CStaffTypeController.class.php';
	
	// FIRST ANSWER
	$objOperatingRoom = new CSession();
	
	$objSession = new CSessionController();
	$objSession->getSessionOverview( $objOperatingRoom );
	
	// SECOND ANSWER
	$objCStaff = new CStaffController();
	$objCStaff->getSpecialistOverview();
	
	// THIRD ANSWER
	$objCStaff->isSpecialistAvailable();
?>