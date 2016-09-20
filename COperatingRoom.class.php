<?php
	class COperatingRoom {

		// member variables
		private $OperatingRoomId;
		public $OperatingRoomNumber;
	
		// getter functions for member variables
		public function getOperatingRoomId() {
			return $this->OperatingRoomId;
		}
		public function getOperatingRoomNumber() {
			return $this->OperatingRoomNumber;
		}

		// setter functions for member variables
		public function setOperatingRoomId( $OperatingRoomId ) {
			$this->OperatingRoomId = $OperatingRoomId;
		}
		public function setOperatingRoomNumber( $OperatingRoomNumber ) {
			$this->OperatingRoomNumber = $OperatingRoomNumber;
		}
		
		public function getScheduledSpecialist() {
			// we are fetching the details about specialist who is currently enganged in current operating room
		}
		
		public function getScheduledAnesthetist() {
			// we are fetching the details about anesthetist(s) who is/are currently enganged in current operating room
		}
	}
?>