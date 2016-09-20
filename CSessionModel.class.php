<?php
	class CSessionModel {

		// member variables
		private $SessionId;
		public $SessionStartDateTime;
		public $SessionEndDateTime;
		public $ScheduledSpecialist;
		public $ScheduledAnesthetist;		
	
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
	}
?>







