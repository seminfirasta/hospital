<?php
	abstract class CStaffTypeModel {

		// member variables
		private $StaffTypeId;
		public $StaffTypeName;
		public $StaffTypeStatus;
		public $StaffTypeCreatedOn;
		public $StaffTypeUpdatedOn;

		// getter functions for member variables
		public function getstafftypeid() {
			return $this->StaffTypeId;
		}
		public function getStaffTypeName() {
			return $this->StaffTypeName;
		}
		public function getStaffTypeStatus() {
			return $this->StaffTypeStatus;
		}
		public function getStaffTypeCreatedOn() {
			return $this->StaffTypeCreatedOn;
		}
		public function getStaffTypeUpdatedOn() {
			return $this->StaffTypeUpdatedOn;
		}

		// setter functions for member variables
		public function setStaffTypeId( $StaffTypeId ) {
			$this->StaffTypeId = $StaffTypeId;
		}
		public function setStaffTypeName( $StaffTypeName ) {
			$this->StaffTypeName = $StaffTypeName;
		}
		public function setStaffTypeStatus( $StaffTypeStatus ) {
			$this->StaffTypeStatus = $StaffTypeStatus;
		}
		public function setStaffTypeCreatedOn( $StaffTypeCreatedOn ) {
			$this->StaffTypeCreatedOn = $StaffTypeCreatedOn;
		}
		public function setStaffTypeUpdatedOn( $StaffTypeUpdatedOn ) {
			$this->StaffTypeUpdatedOn = $StaffTypeUpdatedOn;
		}
	}
?>