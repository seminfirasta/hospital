<?php

	include_once 'CPatient.class.php';
	include_once 'CStaff.class.php';
	
	class CAppointment extends Cstaff {

		// member variables
		private $AppointmentId;
		public $AppointmentDate;
		public $AppointmentCreatedOn;
		public $AppointmentUpdatedOn;
		protected $objPatient;

		public function __construct() {
			$this->objPatient = new CPatient();
		}
		
		// getter functions for member variables
		public function getAppointmentId() {
			return $this->AppointmentId;
		}
		public function getAppointmentDate() {
			return $this->AppointmentDate;
		}
		public function getAppointmentCreatedOn() {
			return $this->AppointmentCreatedOn;
		}
		public function getAppointmentUpdatedOn() {
			return $this->AppointmentUpdatedOn;
		}

		// setter functions for member variables
		public function setAppointmentId( $AppointmentId ) {
			$this->AppointmentId = $AppointmentId;
		}
		public function setAppointmentDate( $AppointmentDate ) {
			$this->AppointmentDate = $AppointmentDate;
		}		
		public function setAppointmentCreatedOn( $AppointmentCreatedOn ) {
			$this->AppointmentCreatedOn = $AppointmentCreatedOn;
		}
		public function setAppointmentUpdatedOn( $AppointmentUpdatedOn ) {
			$this->AppointmentUpdatedOn = $AppointmentUpdatedOn;
		}
	}
?>