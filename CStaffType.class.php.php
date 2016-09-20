<?php
	class CStaffType {

		// member variables
		private $StaffTypeId;
		public $StaffTypeName;
		public $StaffTypeStatus;
		public $StaffTypeCreatedOn;
		public $StaffTypeUpdatedOn;

		// getter functions for member variables
		public function get_staff_type_id() {
			return $this->StaffTypeId;
		}
		public function get_staff_type_name() {
			return $this->StaffTypeName;
		}
		public function get_staff_type_status() {
			return $this->StaffTypeStatus;
		}
		public function get_staff_type_created_on() {
			return $this->StaffTypeCreatedOn;
		}
		public function get_staff_type_updated_on() {
			return $this->StaffTypeUpdatedOn;
		}

		// setter functions for member variables
		public function set_staff_type_id( $StaffTypeId ) {
			$this->StaffTypeId = $StaffTypeId;
		}
		public function set_staff_type_name( $StaffTypeName ) {
			$this->StaffTypeName = $StaffTypeName;
		}
		public function set_staff_type_status( $StaffTypeStatus ) {
			$this->StaffTypeStatus = $StaffTypeStatus;
		}
		public function set_staff_type_created_on( $StaffTypeCreatedOn ) {
			$this->StaffTypeCreatedOn = $StaffTypeCreatedOn;
		}
		public function set_staff_type_updated_on( $StaffTypeUpdatedOn ) {
			$this->StaffTypeUpdatedOn = $StaffTypeUpdatedOn;
		}
	}
?>