<?php
	class CPatient {

		// member variables
		private $PatientId;
		public $PatientName;
		public $PatientAddress;
		public $PatientContactNumber;
		public $PatientEmail;
		public $PatientDob;
		public $PatientRemark;
		public $PatientCreatedOn;
		public $PatientUpdatedOn;

		// getter functions for member variable
		public function getPatientId() {
			return $this->PatientId;
		}
		public function getPatientName() {
			return $this->PatientName;
		}
		public function getPatientAddress() {
			return $this->PatientAddress;
		}
		public function getPatientContactNumber() {
			return $this->PatientContactNumber;
		}
		public function getPatientEmail() {
			return $this->PatientEmail;
		}
		public function getPatientDob() {
			return $this->PatientDob;
		}
		public function getPatientRemark() {
			return $this->PatientRemark;
		}
		public function getPatientCreatedOn() {
			return $this->PatientCreatedOn;
		}
		public function getPatientUpdatedOn() {
			return $this->PatientUpdatedOn;
		}

		// setter functions for member variables
		public function setPatientId( $PatientId ) {
			$this->PatientId = $PatientId;
		}
		public function setPatientName( $PatientName ) {
			$this->PatientName = $PatientName;
		}
		public function setPatientAddress( $PatientAddress ) {
			$this->PatientAddress = $PatientAddress;
		}
		public function setPatientContactNumber( $PatientContactNumber ) {
			$this->PatientContactNumber = $PatientContactNumber;
		}
		public function setPatientEmail( $PatientEmail ) {
			$this->PatientEmail = $PatientEmail;
		}
		public function setPatientDob( $PatientDob ) {
			$this->PatientDob = $PatientDob;
		}
		public function setPatientRemark( $PatientRemark ) {
			$this->PatientRemark = $PatientRemark;
		}
		public function setPatientCreatedOn( $PatientCreatedOn ) {
			$this->PatientCreatedOn = $PatientCreatedOn;
		}
		public function setPatientUpdatedOn( $PatientUpdatedOn ) {
			$this->PatientUpdatedOn = $PatientUpdatedOn;
		}
	}
?>