<?php

	include_once 'CSession.class.php';

	class CSessionExecutor extends CSession {

		// member variables
		private $SessionExecutorId;

		// getter functions for member variables
		public function getSessionExecutorId() {
			return $this->SessionExecutorId;
		}

		// setter functions for member variables
		public function setSessionExecutorId( $SessionExecutorId ) {
			$this->SessionExecutorId = $SessionExecutorId;
		}
	}
?>