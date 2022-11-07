<?php
	class logout extends Controller
	{
		public function index()
		{
			session_destroy();
			$this->loadModel("allLogin");
			$this->view('adminlogin');

		}	
	}
