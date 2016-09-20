<?php
	include_once 'CStaffTypeModel.class.php';
	
	class CStaffModel extends CStaffTypeModel {

		// member variables
		private $StaffId;
		public $StaffName;
		public $StaffAddress;
		public $StaffIsActive;
		public $StaffWeeklyWorkingHours;
		public $StaffContactNumber;
		public $StaffEmail;
		public $StaffDob;
		public $StaffRemark;
		public $AssignedOperationRoom;
		public $StaffCreatedOn;
		public $StaffUpdatedOn;

		// getter functions for member variables
		public function getStaffId() {
			return $this->StaffId;
		}
		public function getStaffName() {
			return $this->StaffName;
		}
		public function getStaffAddress() {
			return $this->StaffAddress;
		}
		public function getStaffType() {
			return $this->staff_type;
		}
		public function getStaffIsActive() {
			return $this->StaffIsActive;
		}
		public function getStaffWeeklyWorkingHours() {
			return $this->StaffWeeklyWorkingHours;
		}
		public function getStaffContactNumber() {
			return $this->StaffContactNumber;
		}
		public function getStaffEmail() {
			return $this->StaffEmail;
		}
		public function getStaffDob() {
			return $this->staff_dob;
		}
		public function getStaffRemark() {
			return $this->StaffRemark;
		}
		public function getStaffCreatedOn() {
			return $this->StaffCreatedOn;
		}
		public function getStaffUpdatedOn() {
			return $this->StaffUpdatedOn;
		}

		// setter functions for member variables
		public function setStaffId( $StaffId ) {
			$this->StaffId = $StaffId;
		}
		public function setStaffName( $StaffName ) {
			$this->StaffName = $StaffName;
		}
		public function setStaffAddress( $StaffAddress ) {
			$this->StaffAddress = $StaffAddress;
		}
		public function setStaffType( $staff_type ) {
			$this->staff_type = $staff_type;
		}
		public function setStaffIsActive( $StaffIsActive ) {
			$this->StaffIsActive = $StaffIsActive;
		}
		public function setStaffWeeklyWorkingHours( $StaffWeeklyWorkingHours ) {
			$this->StaffWeeklyWorkingHours = $StaffWeeklyWorkingHours;
		}
		public function setStaffContactNumber( $StaffContactNumber ) {
			$this->StaffContactNumber = $StaffContactNumber;
		}
		public function setStaffEmail( $StaffEmail ) {
			$this->StaffEmail = $StaffEmail;
		}
		public function setStaffDob( $StaffDob ) {
			$this->StaffDob = $StaffDob;
		}
		public function setStaffRemark( $StaffRemark ) {
			$this->StaffRemark = $StaffRemark;
		}
		public function setStaffCreatedOn( $StaffCreatedOn ) {
			$this->StaffCreatedOn = $StaffCreatedOn;
		}
		public function setStaffUpdatedOn( $StaffUpdatedOn ) {
			$this->StaffUpdatedOn = $StaffUpdatedOn;
		}
	}
?>





















