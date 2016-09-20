<?php
	include_once 'CStaffTypeController.class.php';
	
	class CStaffController extends CStaffTypeController {

		// this function will return current details
		public function getSpecialistOverview( $SpecialistId ) {

			$session = $this->getAssignedSession( $SpecialistId );
			$this->AssignedOperationRoom = $session->getAssignedOR();
			
			return $this;
		}
		
		public function getAssignedSession( $SpecialistId, $TimeSlot = NULL ) {
			// this will return the assigned session of perticular specialist.
			// also we are assigning the current operation room where that specialist is enganged
		}
		
		// this function will check whether is there any session has been assigned to perticular specialist
		public function isSpecialistAvailable( $SpecialistId, $TimeSlot ) {
	
			$session = $this->getSssignedSession( $SpecialistId, $TimeSlot  );

			if ( false == isset( $session->getAssignedOR() ) ) {
				return true;
			}

			return false;
		}
	}
?>





















