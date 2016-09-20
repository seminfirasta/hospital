<?php

	include_once 'COperatingRoom.class.php';
	include_once 'CAppoinment.class.php';
	
	class CSession extends CAppointment{

		// member variables
		private $SessionId;
		public $SessionStartDateTime;
		public $SessionEndDateTime;
		public $ScheduledSpecialist;
		public $ScheduledAnesthetist;		
		protected $objOperatingRoom;

		public function __construct() {
			$this->objOperatingRoom = new COperatingRoom();
		}
	
		// getter functions for member variables
		public function geSessionId() {
			return $this->SessionId;
		}
		public function getSessionStartDateTime() {
			return $this->SessionStartDateTime;
		}
		public function getSessionEndDateTime() {
			return $this->SessionEndDateTime;
		}
		public function getSessionScheduledSpecialist() {
			return $this->ScheduledSpecialist;
		}
		public function getSessionScheduledAnesthetist() {
			return $this->ScheduledAnesthetist;
		}
		
		// setter functions for member variables
		public function setSessionId( $SessionId ) {
			$this->SessionId = $SessionId;
		}
		public function setSessionStartDateTime( $SessionStartDateTime ) {
			$this->SessionStartDateTime = $SessionStartDateTime;
		}
		public function setSessionEndDateTime( $SessionEndDateTime ) {
			$this->SessionEndDateTime = $SessionEndDateTime;
		}
		public function setSessionScheduledSpecialist( $ScheduledSpecialist ) {
			$this->ScheduledSpecialist = $ScheduledSpecialist;
		}
		public function setSessionScheduledAnesthetist( $ScheduledAnesthetist ) {
			$this->ScheduledAnesthetist = $ScheduledAnesthetist;
		}

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







