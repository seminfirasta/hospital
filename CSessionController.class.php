<?php
	class CSessionController {

		// this function will return current details
		public function getSessionOverview( COperationRoom $objOperatingRoom ) {
			
			$this->ScheduledSpecialist  = $objOperatingRoom->getScheduledSpecialist();
			$this->ScheduledAnesthetist = $objOperatingRoom->getScheduledAnesthetist();

			$this->AssignedOperationRoom = $objOperatingRoom->getOperatingRoomId();

			return $this;
		}
		
		public function getAssignedOR() {
			// We are checking the specialist here and according to that we are returning the operation room object
		}

		public function getExecutionTime() {
			// this will return an execution time of perticular session
		}
	}
?>







