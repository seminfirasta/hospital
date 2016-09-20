<?php
	class COperatingRoomModel {

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
	}
?>